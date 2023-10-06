@extends('layouts.app')

@section('nav')
    Crea una nueva publicacion  
@endsection

@section('titulo')
    Crea una nueva publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form action="/IMAGENES" id="dropzone" class="dropzone border-dashed border-2
            w-full h-96 rounded flex flex-col justify-center items-center">
        
            </form>
        </div>
        <div class="md:w-1/2 bg-white p-10 rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <input id="title" name="title" type="text" 
                    placeholder="Titulo de la publicación" class="border p-3 w-full rounded-lg"
                    value="{{old('description')}}"
                    @error('title') border-red-500 @enderror"/>
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Descripcion</label>
                    <textarea id="description" name="description"
                    placeholder="Ingrese una descripción" class="border p-3 w-full rounded-lg"
                    @error('description') border-red-500 @enderror"/>{{old('description')}}</textarea>
                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <input class="bg-sky-600 hover:bg-sky-700 
                transition-colors cursor-pointer uppercase 
                font-bold w-full p-3 text-white rounded-lg" 
                type="submit" 
                value="Crear publicación"
                id="">
            </form>
        </div>
    </div>
@endsection