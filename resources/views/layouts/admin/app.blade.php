<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboards.admin.includes.headerlinks')

    @livewireStyles
</head>

<body class="m-0 font-sans antialiased font-normal rounded-lg text-left leading-default text-base w-full bg-gray-50 text-slate-500 dark:text-white">

    

    {{-- <main class="relative h-full transition-all duration-300 ease-soft-in-out lg:ml-20 lg:py-0 rounded-lg">
        @yield('content')
    </main> --}}

    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex min-h-screen antialiased text-gray-900 bg-gray-100 w-full dark:bg-dark dark:text-light">

            <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800">
              Loading.....
            </div>

            @include('dashboards.admin.includes.header')

            @include('dashboards.admin.includes.sidebar')


           
            <div class="bg-white w-full">
                <main class="flex px-3 mt-20">
                    @yield('content')
                </main>
            </div>
            
        </div>
    </div>


    
    @include('dashboards.admin.includes.footer')
    @include('dashboards.admin.includes.footerlinks')
    @livewireScripts



</body>


@stack('scripts')

</html>

