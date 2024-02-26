@extends('plantilla')
@section('titulo')
    Editar Estudiante
@endsection
@section('contenido')
<h1 class="ml-5 text-3xl font-semibold mt-2 text-center">Editar Estudiante</h1>
<div class="border-[2px] w-96 rounded-[7px_7px_7px_7px] flex mx-auto my-5 border-[#009781] border-opacity-100 shadow-2xl">
        <form method="POST" action="{{ route('estudiantes.update', $student->id) }}">
            @method('PUT')
            @csrf
            <div class="flex flex-col p-2 sm:p-4">
                <label for="name_student" class="mt-3 font-medium">Nombre</label>
                <input type="text" name="name_student" id="name_student" placeholder="Ingresa un nombre" value="{{ $student->name_student }}"
                    class="p-2 border-2 outline-none focus:outline-none h-10 focus:border-[#38b696] w-72 rounded-[7px_7px_7px_7px]">
                @error('name_student')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="lastname_student" class="mt-3 font-medium">Apellido</label>
                <input type="text" name="lastname_student" id="lastname_student" placeholder="Ingresa un apellido" value="{{ $student->lastname_student }}"
                    class="p-2 border-2 outline-none focus:outline-none h-10 focus:border-[#38b696] w-72 rounded-[7px_7px_7px_7px]">
                @error('lastname_student')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="id_student" class="mt-3 font-medium">Matrícula</label>
                <input type="text" name="id_student" id="id_student" placeholder="Ingresa tu matrícula" value="{{ $student->id_student }}"
                    class="p-2 border-2 outline-none focus:outline-none h-10 focus:border-[#38b696] w-72 rounded-[7px_7px_7px_7px]">
                @error('id_student')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="birthday" class="mt-3 font-medium">Fecha de Nacimiento</label>
                <input type="date" name="birthday" id="birthday" value="{{ $student->birthday }}"
                    class="p-2 border-2 outline-none focus:outline-none h-10 focus:border-[#38b696] w-72 rounded-[7px_7px_7px_7px]">
                @error('birthday')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="comments" class="mt-3 font-medium">Comentarios</label>
                <textarea type="text" name="comments" id="comments" placeholder="Comentarios adicionales"
                    class="p-2 border-2 outline-none focus:outline-none h-32 focus:border-[#38b696] w-72 rounded-[7px_7px_7px_7px]"> {{ old('comments', $student->comments)}} </textarea>
                @error('comments')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                <div class="flex flex-row gap-2">
                <button type="submit"
                    class="bg-gray-500 text-white p-2 rounded-[7px_7px_7px_7px] w-44 hover:bg-[#38b696] mt-4">Editar
                    Estudiante
                </button>
                <button class="bg-gray-500 text-white p-2 rounded-[7px_7px_7px_7px] w-44 hover:bg-[#38b696] mt-4">
                    <a href="{{ url('estudiantes') }}">Regresar</a>
                </button>
            </div>
            </div>
        </form>
    </div>
@endsection