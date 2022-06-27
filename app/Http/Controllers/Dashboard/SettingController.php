<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Upload;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $type
     * @return void
     */
    public function index($type)
    {
        $settings = Setting::where('type', $type)->get();
        return view('dashboard.setting.edit', compact('settings', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SettingRequest $request
     * @param $type
     * @return void
     */
    public function update(SettingRequest $request, $type)
    {

        $settings = Setting::where('type', $type)->get();
        foreach ($settings as $setting) {
            if ($setting['key'] != 'image') {
                $setting->value = $request[$setting['key']];
                $setting->save();
            } else {
                if ($request->file('image')) {
                    $keyimage = Upload::uploadImage($request->file('image'), 'settings');
                    $setting->value = $keyimage;
                    $setting->save();
                }
            }
        }
        return redirect()->back()->with('message', __('messages.settingsUpdatedSuccessfully'));
    }

    public function messages()
    {
        $messages = Contact::all();
        return view('dashboard.setting.messages', compact('messages'));
    }

    public function destroyMessage($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->back()->with('message', __('messages.messageDeletedSuccessfully'));
    }
}
