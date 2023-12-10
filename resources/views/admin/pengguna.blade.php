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
                {{ __("Pengguna") }}
            </div>
        </div>
    </div>
</div>
@endsection
