{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    {{-- <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div> --}}




{{-- </x-app-layo/ut> --}}



@extends('profile.layouts.app')

@section('content')

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .hide-scrollbar::-webkit-scrollbar {
      display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .hide-scrollbar {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
    }
  </style>
  

<div class="w-full mt-5 font-poppins scroll-smooth transition duration-300">
    <div class="flex flex-wrap mb-12 -mx-3">
        <div class="w-full max-w-full px-3 mt-2 lg:flex-0 shrink-0 lg:w-3/12">
            <div class="sticky flex flex-col min-w-0 break-words bg-white border-0 top-1/100 drop-shadow-lg rounded-2xl bg-clip-border">
                <ul class="flex flex-col flex-wrap p-4 mb-0 list-none rounded-xl">
                    <li>
                        <a href="#profile" class="block px-4 py-2 transition-colors rounded-lg ease-soft-in-out text-slate-500 hover:bg-gray-200">
                            <div class="inline-block mr-2 text-black fill-current h-4 w-4 stroke-none">
                                <i class='bx bxs-user text-lg' ></i>
                            </div>
                            <span class="leading-normal text-sm text-gray-800 font-semibold">User details</span>
                        </a>
                    </li>
                    <li class="pt-2">
                        <a href="#password" class="block px-4 py-2 transition-colors rounded-lg ease-soft-in-out text-slate-500 hover:bg-gray-200">
                            <div class="inline-block mr-2 text-black fill-current h-4 w-4 stroke-none">
                                <i class='bx bxs-lock-alt text-lg' ></i>
                            </div>
                            <span class="leading-normal text-sm text-gray-800 font-semibold">Change Password</span>
                        </a>
                    </li>

                    <li>
                        <a href="#twofactor" class="block px-4 py-2 transition-colors rounded-lg ease-soft-in-out text-slate-500 hover:bg-gray-200">
                            <div class="inline-block mr-2 text-black fill-current h-4 w-4 stroke-none">
                                <i class='bx bxs-lock text-lg'></i>
                            </div>
                            <span class="leading-normal text-sm text-gray-800 font-semibold">Two Factor</span>
                        </a>
                    </li>

                    <li>
                        <a href="#session" class="block px-4 py-2 transition-colors rounded-lg ease-soft-in-out text-slate-500 hover:bg-gray-200">
                            <div class="inline-block mr-2 text-black fill-current h-4 w-4 stroke-none">
                                <i class='bx bx-laptop text-lg' ></i>
                            </div>
                            <span class="leading-normal text-sm text-gray-800 font-semibold">Session</span>
                        </a>
                    </li>

                    <li>
                        <a href="#accountdelete" class="block px-4 py-2 transition-colors rounded-lg ease-soft-in-out text-slate-500 hover:bg-gray-200">
                            <div class="inline-block mr-2 text-black fill-current h-4 w-4 stroke-none">
                                <i class='bx bxs-trash-alt text-lg' ></i>
                            </div>
                            <span class="leading-normal text-sm text-gray-800 font-semibold">Delete Account</span>
                        </a>
                    </li>

                    
                </ul>
            </div>
        </div>

        {{-- <div class="relative flex flex-col flex-auto min-w-0 px-3 py-4 break-words bg-gray-100 border-0 rounded-lg">

        </div> --}}

        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-9/12 mt-2">
            
            <div class="p-2">

                <div class="flex flex-wrap items-center justify-center bg-white px-3 py-3 rounded-lg drop-shadow-lg">

                    <div class="w-8/12 max-w-full px-2 my-auto flex-0 sm:w-auto">
                        <div class="h-full">
                            <h5 class="mb-1 font-semibold text-gray-800">{{ $user->name }}</h5>
                        </div>
                    </div>
                    <div class="flex max-w-full mt-4 gap-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                    </div>
                    @if($errors->any())
                    <div class="bg-red-300 text-white rounded-3 p-6 my-5">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            
            <div class=" overflow-y-scroll h-[720px] -mt-3 hide-scrollbar w-full p-2">
                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white drop-shadow-lg rounded-2xl bg-clip-border" id="profile">
                    <div class="flex-auto pt-0">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                        @endif                    
                    </div>
                </div>
                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 drop-shadow-lg rounded-2xl bg-clip-border" id="password">
                    <div class="p-6">
                        
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>
                        @endif  
                    </div>
                </div>

                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 drop-shadow-lg rounded-2xl bg-clip-border" id="twofactor">
                    <div class="p-6">
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>
                        @endif 
                    </div>
                </div>

                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 drop-shadow-lg rounded-2xl bg-clip-border" id="session">
                    <div class="p-6">
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 drop-shadow-lg rounded-2xl bg-clip-border" id="accountdelete">
                    <div class="p-6">
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
