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



    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeRole') }}" method="post">
        @csrf

        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 drop-shadow-lg rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h5 class="font-semibold">User Roles</h5>
                        
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-10/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-800" for="roleName">Role Name</label>
                                <input type="text" name="roleName" placeholder="Role name here"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('email') }}"/>
                                @error('roleName')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full max-w-full px-3 flex items-end sm:w-2/12 sm:mt-0">
                                <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-3 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl bg-gradient-to-tl from-slate-800 to-gray-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create Role</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </form>



    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:text-white text-black dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-bold ">
                            {{ $role->id }}
                        </td>
                        <td class="px-6 py-4 font-semibold ">
                            {{ $role->name }}
                        </td>
                        
                        <td class="px-6 py-4">
                            <div class="flex px-6 gap-4 font-semibold">
                                <a href="{{route('viewRole', $role->id)}}" ><i class="fas fa-eye text-slate-400 dark:text-white/70" aria-hidden="true"></i></a>
                                <form action="{{ route( 'deleteRole', $role->id ) }}" id="delete-form-{{ $role->id }}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="ConfirmDelete(event, {{ $role->id }})"><i class="fas fa-trash text-slate-400 dark:text-white/70" aria-hidden="true"></i></button>
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
