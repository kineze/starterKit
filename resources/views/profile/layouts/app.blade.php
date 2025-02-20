<!DOCTYPE html>
<html lang="en" class="scroll-smooth transition duration-300">

<head>
    @include('profile.includes.headerlinks')

    @livewireStyles
</head>

<body class="m-0 font-sans antialiased font-normal rounded-lg text-left leading-default text-base w-full bg-gray-50 text-slate-500 dark:text-white">

    

    {{-- <main class="relative h-full transition-all duration-300 ease-soft-in-out lg:ml-20 lg:py-0 rounded-lg">
        @yield('content')
    </main> --}}

    <div x-data="setup()"   @resize.window="watchScreen()">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 w-full dark:bg-dark dark:text-light">

            @include('profile.includes.header')

            @include('profile.includes.sidebar')


           
            <div class="bg-white w-full">
                <main class="flex px-3 mt-12" x-init="$refs.loading.classList.add('hidden');">
                    <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm">
                        <div class="flex flex-col items-center gap-4">
                            <div class="h-12 w-12 animate-spin rounded-full border-4 border-black border-t-transparent"></div>
                            <div class="text-2xl font-semibold text-black">Loading...</div>
                        </div>
                    </div>
                    @yield('content')
                </main>
            </div>
            
        {{-- </div> --}}
    </div>


    
    @include('dashboards.general.includes.footer')
    @include('dashboards.general.includes.footerlinks')
    @livewireScripts



</body>


@stack('scripts')

</html>