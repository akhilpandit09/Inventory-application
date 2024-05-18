<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <!-- <script src="./tailwind3.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-slate-200  ">
    {{-- <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="Openbar()">
        <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span> --}}
    <div class=" duration-1000 p-3 overflow-y-auto text-center bg-gray-900 shadow h-screen">
        <div class="text-gray-100 text-xl">
            <div class="p-2.5 mt-1 flex items-center rounded-md ">
                <i class="bi bi-app-indicator px-2 py-1 bg-blue-950 rounded-md"></i>
                <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold">INVENTORY</h1>
                <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
            </div>
            <hr class="my-2 text-gray-600">

            <div>
                <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  bg-gray-700">
                    <i class="bi bi-search text-sm"></i>
                    <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
                </div>

                <a href="{{ route('home.index') }}">
                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-950">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Home</span>
                    </div>
                </a>

                <a href="{{ route('analytics.index') }}">
                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-950">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Analytics</span>
                    </div>
                </a>

                <a href="{{ route('products.page') }}">
                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-950">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Products</span>
                    </div>
                </a>

                <a href="{{route('team.index')}}">
                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-950">
                        <i class="fa-solid fa-user-plus"></i>
                        <div class="flex justify-between w-full items-center">
                            <span class="text-[15px] ml-4 text-gray-200">Teams</span>
                            </span>
                        </div>
                    </div>
                </a>


                <div
                    class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-950">
                    <i class="fa-solid fa-right-from-bracket text-red-500"></i>
                    <span class="text-[15px] ml-4  text-red-500 font-bold">Logout</span>
                </div>

            </div>
        </div>
    </div>

    <script>
        // function dropDown() {
        //     document.querySelector('#submenu').classList.toggle('hidden')
        //     document.querySelector('#arrow').classList.toggle('rotate-0')
        // }
        // dropDown()

        // function Openbar() {
        //     document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        // }
    </script>
</body>

</html>
