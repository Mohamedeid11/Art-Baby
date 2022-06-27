<!DOCTYPE html>
<html>
<head>
    @include('agent.layouts.heads')
    @stack('custom-css')
</head>
<body @if(app()->isLocale('ar')) dir="rtl" @endif>
    @include('agent.layouts.leftSidebar')
    @yield('content')
    @include('agent.layouts.footer_text')
    @include('agent.layouts.footer')
    @stack('custom-scripts')
</body>
</html>
