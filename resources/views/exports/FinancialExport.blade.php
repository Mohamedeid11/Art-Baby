<table>
    <thead>
        <tr>
            <th>@lang('dashboard.orderNo')</th>
            <th>@lang('dashboard.client')</th>
            <th>@lang('dashboard.phone')</th>
            <th>@lang('dashboard.netTotal')</th>
            <th>@lang('dashboard.paymentMethod')</th>
            <th>@lang('dashboard.time')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders[0] as $order)
            <tr>
                <td>{{ $order['id'] }}</td>
                <td>
                    {{ $order->client['first_name'] . ' ' . $order->client['last_name'] }}
                </td>
                <td>{{ $order->address['phone'] }}</td>
                <td>{{ $order['net_total'] }} BHD</td>
                <td>{{ $order->payment['name_' . app()->getLocale()] }}</td>
                <td>{{ $order['created_at'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
