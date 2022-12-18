@extends('layouts.app')
@section('titulo')
    Registrate
@endsection
@section('contenido')
    <div class="md:flex md:justify-center">
        
        <div class=" bg-white p-6 rounded-lg shadow-xl w-full">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" name="name" id="name" placeholder="Nombre"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input type="text" name="username" id="username" placeholder="Usuario"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input type="text" name="email" id="email" placeholder="Correo"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" name="password" id="password" placeholder="Contraseña"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repetir Contraseña"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label for="rol" class="mb-2 block uppercase text-gray-500 font-bold">
                        Rol
                    </label>
                    <select name="rol" id="rol" class="border p-3 w-full rounded-lg">
                        <option value="admin">Admin</option>
                        <option value="vendedor">Vendedor</option>
                    </select>
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer font-bold w-full text-white rounded-lg h-10">

            </form>
        </div>
    </div>
@endsection
