
@extends('layouts.app')

@section('titulo')
    Reporte de Asistencia
@endsection

@section('contenido')
<div class="flex h-screen ">

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 ml-10 w-full">
        <div class="flex justify-between">
            <form class="flex items-center" action="">
                <select name="curso_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Ver Todos</option>
                    @foreach ( $cursos as $curso )
                    <option value="{{$curso->id}}">{{$curso->nombreCurso}}</option>
                    @endforeach
                </select>
                <button
                class="border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-blue-600 focus:outline-none focus:shadow-outline" target="_blank">ACTUALIZAR</button>
            </form>
            <div class="flex justify-end">
                <a
                href="{{route('dashboard.pdf')}}"
                class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" target="_blank"
    >REPORTE PDF</a>
            </div>
        </div>
        <!-- Table -->
        <div class="flex flex-col mt-6 w-full">
          <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden shadow sm:rounded-lg">

                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                  <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Nombres
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Apellidos
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Código Alumno
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Nombre Curso
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Fecha
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        CoordX
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        CoordY
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white dark:bg-gray-800">

                    @foreach ( $asistencia as $dato )
                    <tr class="bg-gray-50 dark:bg-gray-700">
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->nombres}}</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                        {{$dato->apellidos}}
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->codAlumno}}</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->curso->nombreCurso}}</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->fecha}}</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->coordX}}</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        <span class="font-semibold">{{$dato->coordY}}</span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>

</div>
<!-- ------------------------------------------------------------------------------------------ -->




@endsection
