@extends('index')
    @section('content')
  
    <div class="w-full max-w-lg my-4 mx-auto">
        <form method="get" action="/update/{{$edit['id']}}" class=" bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"">
            @method('PATCH') 
            @csrf
            <div class="mb-4">
               
                <label for="stock_name" class="block text-gray-700 text-sm font-bold mb-2"> Nombre:</label>
                <input type="text"  name="name" value="{{ $edit['rotulo'] }}"  class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
    
            <div class="mb-4">
                <label for="ticket" class="block text-gray-700 text-sm font-bold mb-2">Localidad:</label>
                <input type="text"  name="locality" value="{{ $edit['locality'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
    
            <div class="mb-4">
                <label for="value" class="block text-gray-700 text-sm font-bold mb-2">Direccion:</label>
                <input type="text"  name="address" value="{{ $edit['address'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
            <div class="mb-4" >
                <label for="ticket"class="block text-gray-700 text-sm font-bold mb-2">DieselA:</label>
                <input type="text"  name="diesel_a" value="{{ $edit['diesel_oil_a'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
    
            <div class="mb-4">
                <label for="value" class="block text-gray-700 text-sm font-bold mb-2">Diesel Premium:</label>
                <input type="text"  name="diesel_premium" value="{{ $edit['diesel_oil_premium'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
            <div class="mb-4">
                <label for="ticket" class="block text-gray-700 text-sm font-bold mb-2">Gasolina 95 e5:</label>
                <input type="text"  name="gas_95_e5" value="{{ $edit['gas_95_e5'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
    
            <div class="mb-4">
                <label for="value" class="block text-gray-700 text-sm font-bold mb-2">Gasolina 98 e5:</label>
                <input type="text"  name="gas_98_e5" value="{{ $edit['gas_98_e5'] }}" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
            <div class="mb-4">
                <label for="value" class="block text-gray-700 text-sm font-bold mb-2">Horario:</label>
                <input type="text"  name="hours" value="{{ $edit['working_hours'] }}" class="shadow appearance-none border rounded  border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
            <button type="submit" class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded ml-40" >Actualizar</button>
        </form>
    </div>
    @endsection
    
   