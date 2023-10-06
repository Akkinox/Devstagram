@extends('layouts.app')

@section('nav')
    {{$user->username}}
@endsection

@section('titulo')
<div class="flex justify-center">
    <div class="mb-5">
        {{$user->username}}
    </div>
    <div class="mb-5 ml-2">
        <button type="button" class="text-white bg-[#24292F]
        hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none
        focus:ring-[#24292F]/50 font-medium rounded-lg text-sm 
          px-5 py-2.5 text-center inline-flex items-center
        dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
        Editar perfil
        </button>
    </div>
</div>  
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="Imagen del usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col 
            items-center md:justify-center md:items-start py-10 md:py-10">
                <p class="text-gray-700 text-2xl">{{$user->username}}</p>
                
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal">Posts</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal">Siguiendo</span>
                </p>
            </div>
        </div>
    </div>
@endsection