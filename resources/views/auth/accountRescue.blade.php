@extends('layouts.app')

@section('titulo')
    Recupera tu cuenta
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{route('recuperar')}}" method="POST" novalidate>
            @csrf
            <div class="mb-5">
                <label for="correo" class="mb-2 block uppercase text-gray-500 font-bold"> Correo </label>
                <input 
                    id="correo"
                    name="correo"
                    type="text"
                    placeholder="correo@mail.com"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                >
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" 
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase
                            font-bold w-full p-3 text-white rounded-lg">Recuperar cuenta</button>
        </form>
    </div>
</div>

@endsection