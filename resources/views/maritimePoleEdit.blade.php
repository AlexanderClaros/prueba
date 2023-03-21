@extends('index')
    @section('content')
    <div class="max-w-lg my-4 mx-auto bg-gray-700/75 rounded-lg">

        <form method="get" action="/updatePole/{{$edit['id']}}" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">
        
            @method('PATCH') 
            @csrf

            <div class="mb-4">
                
                <label for="stock_name" class="block text-white text-sm font-bold mb-2"> Nombre:</label>
                <input type="text"  name="name" value="{{ $edit['rotulo'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="port" class="block text-white text-sm font-bold mb-2">Puerto:</label>
                <input type="text"  name="port" value="{{ $edit['port'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="locality" class="block text-white text-sm font-bold mb-2">Localidad:</label>
                <input type="text"  name="locality" value="{{ $edit['locality'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-white text-sm font-bold mb-2">Direccion:</label>
                <input type="text"  name="address" value="{{ $edit['address'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="diesel_a" class="block text-white text-sm font-bold mb-2">DieselA:</label>
                <input type="text"  name="diesel_a" value="{{ $edit['diesel_oil_a'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="diesel_b" class="block text-white text-sm font-bold mb-2">DieselB:</label>
                <input type="text"  name="diesel_b" value="{{ $edit['diesel_oil_b'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="maritime_diesel" class="block text-white text-sm font-bold mb-2">Diesel uso maritimo:</label>
                <input type="text"  name="maritime_diesel" value="{{ $edit['maritime_diesel'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_95_e5" class="block text-white text-sm font-bold mb-2">Gasolina 95 e5:</label>
                <input type="text"  name="gas_95_e5" value="{{ $edit['gas_95_e5'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="hours" class="block text-white text-sm font-bold mb-2">Horario:</label>
                <input type="text"  name="hours" value="{{ $edit['working_hours'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <button type="submit" class="bg-transparent hover:bg-green-500 text-white font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded ml-40">Actualizar</button>

        </form> 

    </div>
    @endsection