<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.css" />


    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- font awesome icon --}}
    <script src="https://kit.fontawesome.com/04111552cb.js" crossorigin="anonymous"></script>
    {{-- end fontwesome icon --}}
    @vite('resources/css/app.css')
    <title>Inventory App</title>
</head>

<body class="flex h-screen bg-gray-100">
    <div class="w-1/5 h-full  top-0 left-0">
        @include('layout.sidebar')
    </div>

    <div class="flex ml-1/2 bg-gray-100 ">
        <header class="w-4/5 fixed top-0 z-50">
            @include('layout.header')
        </header>
        
        <div class=" py-4 px-4 mt-16 overflow-y-auto">
            @yield('content')
        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
