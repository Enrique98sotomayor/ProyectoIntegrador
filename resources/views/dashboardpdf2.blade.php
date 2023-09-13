
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Asistencia FIEI - @yield('titulo')</title>
    <link rel="stylesheet" href="build/assets/app-7ccfc191.css">
</head>

<body>
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

</body>
</html>


