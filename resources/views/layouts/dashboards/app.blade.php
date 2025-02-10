<!DOCTYPE html>
<html lang="en">

@include('dashboards.general.includes.headerlinks')

<body  class=" w-full bg-gray-50 dark:bg-gradient-to-bl from-neutral-900  to-neutral-900">

    <div id="app">
        @include('dashboards.general.includes.header')

            @yield('content')

        @include('dashboards.general.includes.footer')
    </div>
</body>

@include('dashboards.general.includes.footerlinks')
@stack('scripts')

</html>