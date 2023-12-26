@extends('guest.layouts.app')
@section('content')
<div class=" min-h-screen">
        <div class="bg-white dark:bg-gray-800 overflow-hidden">
            <div class="relative text-gray-900 dark:text-gray-100">
                <div class="absolute flex flex-col justify-center items-center w-full h-full z-30">
                    <div class="bg-gray-500/60 max-w-6xl w-full p-10 px-14 rounded-md backdrop-blur-sm backdrop-brightness-150">
                        <img src="{{ asset('images/logo2.svg') }}" alt="logo_hero" class="w-full opacity-60">
                        <h1 class="bg-gradient-to-br text-white text-4xl md:text-8xl uppercase font-extrabold">
                        </h1>
                    </div>
                    <div class="text-white">
                        Sistem Informasi Logistik Alutsista
                    </div>
                </div>
                <div class="absolute flex bg-gradient-to-b from-slate-900 justify-center items-center to-slate-500 z-20 w-full opacity-60" style="height: 60vh">
                </div>
                <img src="{{ asset('images/beranda.jpg') }}" alt="beranda" class="object-cover object-top w-full" style="height: 60vh">
            </div>
            <div class="w-full py-5">
                <div class="flex w-full justify-center py-5">
                    <div class="max-w-6xl w-full pt-3 flex flex-col items-center justify-center">
                        <div class="text-3xl flex justify-center items-center w-full font-semibold pt-5">
                            <h4>Terbaru</h4>
                        </div>
                        <div class="pt-3 pb-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                                @foreach ($alutsistas as $alutsista)                                    
                                    <div class="shadow-md rounded-md max-w-3xl w-full border-slate-400 border-2 h-80">
                                        <div>
                                            @if ($alutsista->foto == null)
                                                <img src="{{ asset('images/beranda.jpg') }}" alt="beranda" class="object-cover object-top w-full rounded-t-md">
                                            @else
                                                <img src="{{ asset('storage/'. $alutsista->foto) }}" alt="beranda" class="object-cover object-top w-full rounded-t-md h-52">
                                            @endif
                                        </div>
                                        <div class="p-3 font-bold overflow-hidden">
                                            <div class="line-clamp-2 max-h-30 h-full">
                                                <p>{{ $alutsista->nama_senjata }}</p>
                                            </div>
                                            <div class="pt-5 w-full items-end flex justify-end hover">
                                                <a href="{{ route('alutsista.show', ['alutsista' => $alutsista->kode_senjata]) }}" class="bg-slate-900 py-2 px-3 rounded-md text-white">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="text-lg font-medium bg-white border-2 border-slate-900 py-2 px-3 rounded-md group hover:bg-slate-900">
                            <a class="group-hover:text-white" href="{{ route('alutsista.semua') }}">Semua</a>
                        </div>
                    </div>

                </div>
            </div>
            <div id="etalase" class="w-full py-5">
                <div class="flex w-full justify-center py-5">
                    <div class="max-w-6xl w-full pt-3 flex flex-col items-center justify-center">
                        <div class="text-3xl font-semibold pt-5">
                            <h4>Etalase</h4>
                        </div>
                        <div class="py-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-5">
                                @foreach ($jeniss as $jenis)                                    
                                    <div class="shadow-md rounded-md max-w-6xl w-full border-slate-400 border-2">
                                        <div class="relative group overflow-hidden">
                                            <img src="{{ asset('images/beranda.jpg') }}" alt="beranda" class="object-cover object-top w-full rounded-t-md transition-transform duration-300 transform group-hover:scale-105">
                                            <div class="absolute top-0 z-40 text-white font-semibold text-3xl bg-gray-800/20 hover:bg-gray-800/50 w-full h-full flex items-center justify-center">
                                                <a href="alutsista/semua?kategori={{ $jenis->slug }}" class="">{{ $jenis->nama_jenis_senjata }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
@endsection