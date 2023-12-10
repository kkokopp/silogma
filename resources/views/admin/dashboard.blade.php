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
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in! Admin") }}
                <div>
                    <x-input-label for="nama_senjata" :value="__('Nama Senjata')" />
                    <x-text-input id="nama_senjata" class="block mt-1 w-full" type="nama_senjata" name="nama_senjata" :value="old('nama_senjata')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('nama_senjata')" class="mt-2" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
