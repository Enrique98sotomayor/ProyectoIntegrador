@extends('layouts.app')

@section('contenido')

<div class="flex justify-center gap-10 mt-30">

    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-20 mt-10">
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('img/usuario.svg')}}" alt="">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Decano</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Encargado de la Facultad</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{route('login')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-20 mt-10">
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('img/usuario.svg')}}" alt="">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Docente</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Encargado de Curso</span>


            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{route('logindocente')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar Sesión</a>
            </div>
        </div>
    </div>


    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-20 mt-10">
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('img/usuario.svg')}}" alt="">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Secretaria</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">Encargado de la Facultad</span>
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{route('loginsecretaria')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Iniciar Sesión</a>
            </div>
        </div>
    </div>

</div>
@endsection
