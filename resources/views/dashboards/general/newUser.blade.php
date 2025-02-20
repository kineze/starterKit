@extends('layouts.general.app')

@section('content')

<div class="w-full px-6 mx-auto font-poppins">

    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeUser') }}" method="post">
        @csrf
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:w-8/12 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-white dark:drop-shadow-lg drop-shadow-lg rounded-lg">
                    <div class="flex-auto p-6">
                        <h5 class="dark:text-black ml-1 mb-4 font-semibold">User Information</h5>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class="mt-6 mb-2 ml-1 font-semibold text-sm text-slate-800" for="UserName">User Name</label>
                                <input type="text" name="UserName" placeholder="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('UserName') }}"/>
                                @error('UserName')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mt-2 -mx-3">
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-semibold text-sm text-slate-800" for="email">Email</label>
                                <input type="email" name="email" placeholder="example@org.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('email') }}"/>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-semibold text-sm text-slate-800" for="phone">Phone</label>
                                <input type="text" name="phone" placeholder="XXXXXXXXXX" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('phone') }}"/>
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap mt-2 -mx-3">
                            <div class=" w-full max-w-full px-3 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-semibold text-sm text-slate-800" for="password">Password</label>
                                <input type="password" name="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-semibold text-sm text-slate-800" for="ConfirmPassword">Confirm password</label>
                                <input type="password" name="password_confirmation" placeholder="Confirm password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>
                        </div>
                    
                        <div class="flex flex-wrap mt-2 -mx-3">

                            <div class=" w-full max-w-full px-3 mt-4 items-center flex sm:mt-0">
                                <div class="flex items-center h-5">
                                    <input id="send-password-email" name="send_password_email" value="1" aria-describedby="helper-checkbox-text" type="checkbox" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="ms-2 text-sm">
                                    <label for="helper-checkbox" class="font-medium text-gray-900 dark:text-gray-600">Send Password Via Email?</label>
                                </div>
                            </div>

                        </div>

                        <div class="">
                            <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs bg-gradient-to-tl from-gray-800 to-slate-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create User</button>
                        </div>
                    </div>
                </div>
            </div> 

            <div class="w-full max-w-full px-3 mt-6 lg:mt-0 shrink-0 lg:w-4/12 sm:flex-0">
                <div class=" relative flex flex-col min-w-0 break-words bg-white border-0 drop-shadow-lg rounded-lg">
                <div class="flex-auto p-6">
                    <h5 class="font-semibold mb-3 dark:text-black">Access Levels</h5>

                    @if ($errors->has('roles'))
                        <p class="text-red-500 text-xs mt-1">{{ $errors->first('roles') }}</p>
                    @endif
                    
                    <div class="grid h-fit w-full sm:grid-cols-1 gap-2">

                        @foreach ($roles as $role)
                            <div class="relative {{ $errors->has('roles') ? 'border-red-500' : 'border-gray-500' }} flex flex-col h-fit bg-gray-100 p-5 rounded-lg border-0.4 border-gray-500 cursor-pointer">
                                <label>
                                    <input id="checkbox-{{$role->id}}" name="roles[]" value="{{$role->name}}" value="1" aria-describedby="helper-checkbox-text" type="checkbox" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-400 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2">
                                    <label for="checkbox-{{$role->id}}" class="cursor-pointer font-semibold uppercase select-none text-slate-700">{{$role->name}}</label>
                                </label>
                            </div>
                        @endforeach
                        
                    </div>
        
                </div>
                </div>
        
            </div>
        
        </div>

        
    </form>

  </div>
@endsection
