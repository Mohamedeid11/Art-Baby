<table>
    <thead>
        <tr>
            <th>#</th>
            <th>@lang('dashboard.type')</th>
            <th>@lang('dashboard.orderNo')</th>
            <th>@lang('dashboard.client')</th>
            <th>@lang('dashboard.value')</th>
            <th>@lang('dashboard.result')</th>
            <th>@lang('dashboard.transaction_number')</th>
            <th>@lang('dashboard.date')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders[0] as $report)
            <tr class="gradeX {{ $report['id'] }}">
                <td>{{ $loop->index + 1 }}</td>
                <td>@lang('dashboard.' . $report['type'])</td>
                <td>{{ $report['order_id'] }}</td>
                <td>{{ getUsername_($report['client_id']) }}</td>
                <td>{{ $report['value'] }}</td>
                <td>{{ $report['result'] }}</td>
                <td>{{ $report['transaction_number'] }}</td>
                <td>{{ $report['created_at'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
