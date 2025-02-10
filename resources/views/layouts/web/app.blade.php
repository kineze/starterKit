<!DOCTYPE html>
<html lang="en">

@include('web.includes.headerlinks')

<body  class=" w-full bg-gray-50 dark:bg-gradient-to-bl from-neutral-900  to-neutral-900">

    <div id="app">
        @include('web.includes.header')

            @yield('content')

        @include('web.includes.footer')
    </div>
</body>

@include('web.includes.footerlinks')
@stack('scripts')

</html>