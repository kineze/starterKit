<!DOCTYPE html>
<html lang="en">

@include('web.includes.headerlinks')

<body  class=" w-full">

    <div id="app">
        @include('web.includes.header')

            @yield('content')

        @include('web.includes.footer')
    </div>
</body>

@include('web.includes.footerlinks')
@stack('scripts')

</html>