<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Inicio</title>

    </head>
    <body class="antialiased bg-gray-500">
        <a href="{{'listado'}}"></a>
        <div class="p-2 my-5 ">
            <div class="p-2 my-5 ">

                    <div class="flex items-center justify-center w-full p-8 px-6 bg-white border-4 rounded-lg md:mx-auto md:mx-0 md:max-w-md lg:max-w-full md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12 snap-none">
                        <div class="w-full mb-1 h-200 touch-none">
                            <h1 class="py-3 pb-0 text-4xl font-bold text-center text-blue-900">Cargar Documento</h1>

                <form action="EnvioDatos" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mt-3">




                                <label class="block text-gray-700" for="default_size">Subir Documento</label>
                        <input class="block w-full text-lg border border-blue-900 rounded-lg cursor-pointer placeholder:py-3 bg-gray-50 dark:text-gray-400 focus:outline-none 0" type="file" name="pdf"  size="150" accept=".pdf" maxlength="150" id="" required>
                    </div>
                    <div class="mt-3">
                                    <label for="" class="block text-gray-700">Número del Expediente:</label>
                        <input type="text" placeholder="Ingresa el Nombre del Archivo" class="w-full px-4 py-3 mt-2 bg-gray-200 border rounded-lg focus:border-blue-900 focus:bg-white focus:outline-none"  name="nombre"  size="70" maxlength="70" id="" required>
                    </div>
                    <div class="mt-3">
                                    <label for="" class="block text-gray-700">Description del Archivo:</label>
                        <input type="text" placeholder="Ingresa la descripción del Archivo" class="w-full px-4 py-3 mt-2 bg-gray-200 border rounded-lg focus:border-blue-900 focus:bg-white focus:outline-none" name="description" size="100" maxlength="250" id="" required>
                    </div>

                    <div>
                    <label for="" class="block mt-2 text-gray-700">Fecha del Documento: </label>
                        <input type="date" class=" mt-3 border border-blue-900  rounded-lg cursor-pointer  text-gray-900 text-sm rounded-lg focus:ring-blue-900 focus:border-blue-500 block w-full pl-3 p-2.5 "  name="fecha" size="100" maxlength="250" id="" required>
                    </div>
                    {{-- <div>
                        <label for="">Categorías</label>
                        <select  class="form-control">
                            <option value="">Seleccione la categoria</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>

                            @endforeach
                        </select>
                    </div> --}}
                    <div class="my-2 ">
                        <button class="items-center w-full py-2 text-white bg-blue-900 rounded-lg tex-center fon3t-semibold hover:bg-blue-800" type="submit">Guardar</button>
                        </div>

                </form>
                </div>

                            </div>
                    </div>
                    </div>


            </div>
            </div>
    </body>
</html>
