@vite('resources/css/app.css')
<body>

    <div class="p-10 m-10">
        <table class="table w-full text-black sm:p-4">
            <thead class='text-sm font-semibold text-white uppercase bg-blue-900 border-4 border-white '>
                <tr class="border-4 border-blue-900 ">
                <th class='px-6 py-4 text-center border-4 border-blue-900 '>ID</th>
                <th class='px-6 py-4 text-center border-4 border-blue-900 '>NUMERO DE EXPEDIENTE</th>
                <th class='px-6 py-4 text-center border-4 border-blue-900 '>DESCRIPCION</th>
                <th class='px-6 py-4 text-center border-4 border-blue-900 '>FECHA</th>
                <th class='px-6 py-4 text-center border-4 border-blue-900 '>DOCUMENTO</th>
            </thead >
            <tbody class='py-4 text-center border-4 border-blue-900'>
                @foreach ($datos as $dato)
                    <tr class='px-6 py-4 my-4 text-black border-4 border-blue-900'>
                        <td class='py-4 font-bold text-center border-4 border-blue-900'>{{$dato->id}}</td>
                        <td class='py-4 text-center border-4 border-blue-900'>{{$dato->name}}</td>
                        <td class='py-4 text-center border-4 border-blue-900'>{{$dato->description}}</td>
                        <td class='py-4 text-center border-4 border-blue-900'> {{$dato->fecha}}</td>
                         <td class='py-4 text-center border-4 border-blue-900'><a href="documentos/{{$dato->documento}}" target="blank_" class="px-4 py-2.5 text-white bg-blue-900 rounded-lg">Visualizar</a></td>
                     </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
