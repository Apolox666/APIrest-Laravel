<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="">
    @include('includes.header')

    <div class="relative overflow-x-auto mt-20 p-40">
        <a href=""></a>
        <table id="personTable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Phone
                    </th>
                </tr>
            </thead>
            <tbody id="personTableBody">
                <!-- Los datos se insertarán aquí mediante JavaScript -->
            </tbody>
        </table>
    </div>
    @vite('resources/js/fetchPersons.js')
    
</body>

</html>
