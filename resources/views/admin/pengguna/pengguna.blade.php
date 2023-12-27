@extends('admin.layouts.app')
@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Dashboard') }}
</h2>
@endsection
@section('content')
<div class="py-4">
    <div class="px-4">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex p-5">
                <a href="{{ route('admin.pengguna.tambah') }}" class="flex gap-2 justify-center items-center hover:bg-green-600 rounded-lg bg-green-500 py-2 px-4 text-white font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>                      
                    Tambah
                </a>
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-gradient-to-br from-slate-900 to-slate-600">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Induk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Peran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telepon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)                                
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->email }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->nomor_induk }}
                                    </td>
                                    @foreach ($user->roles as $role)    
                                        <td class="px-6 py-4">
                                            {{ $role->name }}
                                        </td>
                                    @endforeach
                                    <td class="px-6 py-4">
                                        {{ $user->nomor_tlp }}
                                    </td>
                                    <td class="px-6 flex gap-2 py-4">
                                        {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                        <a href="{{ route('admin.pengguna.edit', ['user' => $user->kode_user]) }}" class="font-semibold bg-blue-400 text-white border-blue-600 px-2 py-1 border-2 rounded-lg hover:bg-blue-600">Edit</a>
                                        <form action="{{ route('admin.pengguna.destroy', ['user' => $user->kode_user]) }}" method="POST">
                                            {{-- {{ dd($user->kode_user) }} --}}
                                            @csrf     
                                            @method('DELETE')                                       
                                            <button type="submit" class="font-semibold bg-red-400 text-white border-red-600 px-2 py-1 border-2 rounded-lg hover:bg-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection