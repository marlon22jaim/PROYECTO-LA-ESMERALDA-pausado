<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Esmeralda - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                La Esmeralda
            </h1>
            <nav>
                <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="/crear-cuenta">Crear Usuario</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <div class="flex h-screen">


            <div class="p-6 border-r w-64 border-gray-200">
                <h6 class="mb-4 font-bold">Menú</h6>
                <ul>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/queue-list.svg') }}" />
                        </div>
                        <span class="self-center"> Inventario </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/squares-2x2.svg') }}" />
                        </div>
                        <span class="self-center"> Categorías </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/building-storefront.svg') }}" />
                        </div>
                        <span class="self-center"> Proveedores </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/shopping-cart.svg') }}" />
                        </div>
                        <span class="self-center"> Compras </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/shopping-bag.svg') }}" />
                        </div>
                        <span class="self-center"> Ventas </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/check-badge.svg') }}" />
                        </div>
                        <span class="self-center"> Auditorias </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/calculator.svg') }}" />
                        </div>
                        <span class="self-center"> Contabilidad </span>
                    </li>
                    <li class="mb-8 flex">
                        <div class="bg-white shadow-sm p-2 rounded-lg mr-3">
                            <img src="{{ asset('img/user-group.svg') }}" />
                        </div>
                        <span class="self-center"> Usuarios </span>
                    </li>
                </ul>
            </div>
            <div>
                @yield('contenido')
            </div>
        </div>


    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
        La Esmeralda - Todos los derechos reservados
        {{ now()->year }}
    </footer>
</body>

</html>
