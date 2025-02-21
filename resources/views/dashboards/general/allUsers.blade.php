@extends('layouts.general.app')

@section('content')

<div class="w-full p-2 mx-auto font-poppins">

    <div>
        <div class="flex">
            <div class="p-2">
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
    </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <div class="p-5 text-lg font-semibold flex justify-between text-left rtl:text-right text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                <div>
                    All Users
                </div>
                <div>
                    <a href="{{route('newUser')}}" class="whitespace-nowrap inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-gray-800 dark:bg-white rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border border-none text-white dark:text-black"><i class="fas fa-plus mr-2"></i> New User</a>
                </div>
            </div>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Roles
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:text-white text-black dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-bold ">
                            {{ $user->id }}
                        </td>
                        <td class="px-6 py-4 font-semibold ">
                            {{ $user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->phone }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-4">
                                @foreach($user->roles as $role)
                                    @if($role->name === 'SuperAdmin')
                                        <span class="py-1 px-4 text-sm rounded-lg inline-block whitespace-nowrap text-center bg-lime-500 font-semibold">{{ $role->name }}</span>
                                    @else
                                        <span class="py-1 px-4 text-sm rounded-lg inline-block whitespace-nowrap text-center bg-rose-500 font-semibold">{{ $role->name }}</span>
                                    @endif
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap gap-2 justify-start">
                                <a href="{{route('getUpdateUser', $user->id )}}" class=" px-2 py-1 hover:bg-white rounded-lg text-black dark:text-white hover:text-black">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <form action="{{ route( 'deleteUser', $user->id ) }}" id="delete-form-{{ $user->id }}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="ConfirmDelete(event, {{ $user->id }})" class="px-2 py-1 hover:bg-white rounded-lg text-rose-600">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
    
@endsection