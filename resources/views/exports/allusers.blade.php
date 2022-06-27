<table>
    <thead>
        <tr>
            <th>@lang('dashboard.first_name')</th>
            <th>@lang('dashboard.last_name')</th>
            <th>@lang('dashboard.phone')</th>
            <th>@lang('dashboard.email')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as  $client)
            <tr>
                <td>{{ $client->first_name }}</td>
                <td>{{ $client->last_name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
