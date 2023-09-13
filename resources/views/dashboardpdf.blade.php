
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Asistencia FIEI - @yield('titulo')</title>
    <link rel="stylesheet" href="build/assets/app-7ccfc191.css">
</head>
<body class="bg-gray-100">
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

</body>
</html>


