@extends('admin.layouts.app')
@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Dashboard') }}
</h2>
@endsection
@section('content')
<div class="py-4">
    <div class="px-4">
        <div class="bg-gray-50 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form action="POST" method="">
                    @csrf
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-4 w-1/2">
                            <div>
                                <x-input-label for="nama_senjata" :value="__('Nama Senjata')" />
                                <x-text-input id="nama_senjata" class="block mt-1 w-full" type="text" name="email" :value="old('nama_senjata')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('nama_senjata')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="seri" :value="__('Nomor Seri')" />
                                <x-text-input id="seri" class="block mt-1 w-full" type="text" name="email" :value="old('seri')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('seri')" class="mt-2" />
                            </div>
                            <div>
                                <label for="jenis_senjata" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Jenis</label>
                                <select id="jenis_senjata" name="jenis_senjata" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-dark-600 rounded-md shadow-sm block mt-1 w-full">
                                    @foreach ($jenis_senjatas as $jenis_senjata)
                                        <option value="{{ $jenis_senjata->id }}">{{ $jenis_senjata->nama_jenis_senjata }}</option>                                
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="status_senjata" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Status</label>
                                <select id="status_senjata" name="status_senjata" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-dark-600 rounded-md shadow-sm block mt-1 w-full">
                                    @foreach ($status_senjatas as $status_senjata)
                                        <option value="{{ $status_senjata->id }}">{{ $status_senjata->nama_status_senjata }}</option>                                
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="mx-auto bg-white rounded-lg shadow-md overflow-hidden items-center">
                                <div class="px-4 py-5">
                                  <div id="image-preview" class="p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                                    <input id="upload" type="file" class="hidden" accept="image/*" />
                                    <label for="upload" class="cursor-pointer">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                      </svg>
                                      <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload Foto Alutsista</h5>
                                      <p class="font-normal text-sm text-gray-400 md:px-6">Pilih gambar alutsista</p>
                                      <p class="font-normal text-sm text-gray-400 md:px-6">pastikan memiliki format <b class="text-gray-600">JPG, PNG, or GIF</b></p>
                                      <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                                    </label>
                                  </div>
                                  <div class="flex items-center justify-center">
                                    <div class="w-full">
                                      <label class="w-full text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center justify-center mr-2 mb-2 cursor-pointer">
                                        <span class="text-center ml-2">Upload</span>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection