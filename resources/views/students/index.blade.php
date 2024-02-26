@extends('plantilla')
@section('titulo')
    Estudiantes
@endsection
@section('contenido')
    <h1 class="ml-5 text-3xl font-semibold mt-2">Tabla de Estudiantes</h1>
    <div class="flex p-2 sm:p-4 flex-col">
        <button class="bg-gray-500 text-white p-2 rounded-[7px_7px_7px_7px] w-44 hover:bg-[#38b696] mb-4">
            <a href="{{ route('estudiantes.create') }}">Agregar Estudiante</a>
        </button>
        <table>
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">ID</th>
                    <th class="border-2 border-x-black p-2">Nombre</th>
                    <th class="border-2 border-x-black p-2">Apellido</th>
                    <th class="border-2 border-x-black p-2">Fecha de Nacimiento</th>
                    <th class="p-2">Opciones</th>
                <tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <td class="border border-x-0">{{ $student->id_student }}</td>
                    <td class="border-2 border-x-black">{{ $student->name_student }}</td>
                    <td class="border-2 border-x-black">{{ $student->lastname_student }}</td>
                    <td class="border-2 border-x-black">{{ $student->birthday }}</td>
                    <td class="flex flex-row gap-3 justify-center border border-x-0">
                        <a class="text-blue-500 cursor-pointer transition-transform duration-75 hover:scale-110" href="{{ route('estudiantes.edit', $student->id) }}" "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d=" m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0
                            0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18
                            14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        </a>
                        <form action="{{ route('estudiantes.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 transition-transform duration-75 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            </button>
                        </form>
                    </td>
            </tbody>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
