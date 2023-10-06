@extends('layouts.app')

@section('nav')
    Regístrate en Devstagram    
@endsection

@section('titulo')
    Regístrate en Devstagram 
@endsection


@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" 
                    placeholder="Ingresa tu nombre" class="border p-3 w-full rounded-lg"
                    value="{{old('name')}}"
                    @error('name') border-red-500 @enderror"/>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Nombre de usuario</label>
                    <input id="username" name="username" type="text" 
                    placeholder="Ingresa un nombre de usuario" class="border p-3 w-full rounded-lg"
                    value="{{old('username')}}"
                    @error('username') border-red-500 @enderror">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="email" 
                    placeholder="Ingresa tu email" class="border p-3 w-full rounded-lg"
                    value="{{old('email')}}"
                    @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input id="password" name="password" type="password" 
                    placeholder="Ingresa una contraseña" class="border p-3 w-full rounded-lg"
                    value="{{old('password')}}"
                    @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" 
                    placeholder="Confirma tu contraseña" class="border p-3 w-full rounded-lg"
                    value="{{old('password_confirmation')}}"
                    @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input class="bg-sky-600 hover:bg-sky-700 
                transition-colors cursor-pointer uppercase 
                font-bold w-full p-3 text-white rounded-lg" 
                type="submit" 
                value="Crear cuenta"
                id="">
            </form>
        </div>
    </div>
@endsection