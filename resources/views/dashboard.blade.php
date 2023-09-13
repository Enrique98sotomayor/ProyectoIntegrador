
@extends('layouts.app')

@section('titulo')
    Reporte de Asistencia
@endsection

@section('contenido')
<div class="flex h-screen ">

    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 ml-10 w-full">
        <div class="flex justify-end">
            <a
            href="{{route('dashboard.pdf')}}"
            class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" target="_blank"
        >REPORTE PDF</a>
        </div>
        <!-- Table -->
        <div class="flex flex-col mt-6">
          <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden shadow sm:rounded-lg">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-600">
                  <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">

                          </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Asistencias
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                        Inasistencias</th>
                    </tr>
                  </thead>
                  <tbody class="bg-white dark:bg-gray-800">

                    @foreach ( $cursos as $curso )
                    <tr class="bg-gray-50 dark:bg-gray-700">
                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="font-semibold">{{$curso->nombreCurso}}</span>
                        </td>
                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="font-semibold">{{$curso->asistencias->where('valor','a')->count()}}</span>
                        </td>
                        <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                            <span class="font-semibold">{{$curso->asistencias->where('valor','f')->count()}}</span>
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
