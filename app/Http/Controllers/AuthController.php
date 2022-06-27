<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\resetpassRequest;
use App\Models\Client;
use App\Models\Country;
use App\Models\Favorite;
use App\Models\Order;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function reg(RegisterRequest $request)
    {
        $client = Client::create([
            'phone' => $request->get('phone'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'country_id' => $request->get('country_id'),
            'password' => bcrypt($request->get('password')),
            'country_id' => $request->get('country_id'),
            'country' => Country::where('id',$request->country_id)->value('name_en'),

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        auth('client')->login($client);
        return redirect()->route('home')->with('message', __('messages.profileCompleted'));
    }

    public function resetpass(resetpassRequest $request)
    {
        $client = Client::where('phone', $request->get('phone'))->first();
        if (! $client) {
            return redirect()->back()->with('message', __('website.UserDontExists'));
        }
        $client->password = bcrypt($request->get('password'));
        $client->save();
        auth('client')->login($client);
        return redirect()->route('home');
    }

    public function login()
    {
        return view('website.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('phone', 'password');

        if (auth('client')->attempt($credentials, request('remember'))) {
            return redirect()->route('home')->with('message', __('messages.loginSuccessfully'));
            // return redirect()->route('your route name')->with('message','Data added Successfully');
        }

        return redirect()->back()->with('error', __('messages.phonePasswordIncorrect'));
    }

    public function register()
    {
        $Countries = Country::where('display',1)->get();
        return view('website.auth.register', compact('Countries'));
    }



    public function forgetPassword()
    {
        return view('website.auth.forgetPassword');
    }

    public function profile()
    {
        $currentOrder = Order::where('client_id', auth('client')->user()->id)->whereIn('status', [9, 0, 1])->with(['orderProducts'])->orderBy('created_at', 'desc')->first();
        $previousOrder = Order::where([['client_id', auth('client')->user()->id]])->whereIn('status', [2, 10])->with(['orderProducts'])->orderBy('created_at', 'desc')->first();
        $favourit = Favorite::where('client_id', auth('client')->user()->id)->get();
        $client = Client::where('id', auth('client')->user()->id)->first();
        $Countries = Country::where('display',1)->get();
        return view('website.profile.myProfile', compact('currentOrder', 'previousOrder', 'client', 'favourit','Countries'));
    }

    public function update(ProfileRequest $request)
    {
        $user = auth('client')->user();
        $user->email = $request->get('email');
        $user->first_name = $request->get('firstName');
        $user->last_name = $request->get('lastName');
        $user->country_id = $request->get('country_id');
        $user->country = Country::where('id',$request->country_id)->value('name_en');
        if ($request->has('password') && !empty($request->get('password'))) {
            $user->password = bcrypt($request->get('password'));
        }
        $user->save();

        return redirect()->back()->with('message', __('messages.profileUpdated'));
    }

    public function logout()
    {
        auth('client')->logout();
        session()->forget('coupon');
        session()->forget('coupon_type');
        session()->save();
        return redirect()->route('home')->with('message', __('messages.logoutSuccessfully'));
    }
}
