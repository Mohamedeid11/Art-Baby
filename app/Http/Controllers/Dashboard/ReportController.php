<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\AllUsers;
use App\Exports\ClientExport;
use App\Exports\FinancialExport;
use App\Exports\PaymentExport;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Order;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public $data;

    public function financial()
    {
        $orders = [];
        if (request('from') && request('to')) {
            $orders = Order::whereIn('status', [0, 1, 2])
                ->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'))->get();
        }
        Session::put('data', $orders);
        Session::put('type', 'financial');
        return view('dashboard.report.financial', compact('orders'));
    }

    public function client()
    {
        $clients = Client::all();
        $client = null;
        if (request('client_id')) {
            $client = Client::find(request('client_id'));
        }
        $client ? Session::put('data', $client->orders) : '';
        Session::put('type', 'client');
        return view('dashboard.report.client', compact('client', 'clients'));
    }

    public function payment()
    {
        $reports = [];
        if (request('from') && request('to')) {
            $reports = Transactions::whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'))->get();
        }
        Session::put('data', $reports);
        Session::put('type', 'payment');
        return view('dashboard.report.payment', compact('reports'));
    }

    public function exportData()
    {
        if (Session::get('type') == 'financial') {
            $export = new FinancialExport([
                Session::get('data'),
            ]);
        }
        if (Session::get('type') == 'client') {
            $export = new ClientExport([
                Session::get('data'),
            ]);
        }
        if (Session::get('type') == 'payment') {
            $export = new PaymentExport([
                Session::get('data'),
            ]);
        }
        if (Session::get('type') == 'clients') {
            $export = new AllUsers([
                Session::get('data'),
            ]);
        }
        session()->forget(['data']);
        session()->forget(['type']);
        return Excel::download($export, 'report- ' . now() . '.xlsx');
    }

}
