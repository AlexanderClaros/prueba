@extends('index')
    @section('content')
    <div class="max-w-lg my-4 mx-auto bg-gray-700/75 rounded-lg">

        <form method="get" action="/store" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4">

            @csrf

            <div class="mb-4">
                <label for="name" class="block text-white text-sm font-bold mb-2"> Nombre:</label>
                <input type="text"  name="name" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="locality" class="block text-white text-sm font-bold mb-2">Localidad:</label>
                <input type="text"  name="locality"  class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="Province" class="block text-white text-sm font-bold mb-2">Provincia:</label>
                <select name="province" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ( $data2 as $register )
                    <option value="{{$register['id']}}">{{$register['name']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="municipality" class="block text-white text-sm font-bold mb-2">Municipio:</label>
                <select name="municipality" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach ( $data as $register2 )
                
                        <option value="{{$register2['id']}}">{{$register2['name']}}</option>
                
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="address" class="block text-white text-sm font-bold mb-2">Direccion:</label>
                <input type="text"  name="address"  class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="postalCode" class="block text-white text-sm font-bold mb-2">Codigo Postal:</label>
                <input type="text"  name="postalCode"  class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="hours" class="block text-white text-sm font-bold mb-2">Horario:</label>
                <input type="text"  name="hours"  class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="lat" class="block text-white text-sm font-bold mb-2">Latitud:</label>
                <input type="text"  name="lat" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="long" class="block text-white text-sm font-bold mb-2">Longitud:</label>
                <input type="text"  name="long" class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="diesel_a" class="block text-white text-sm font-bold mb-2">DieselA:</label>
                <input type="text"  name="diesel_a"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="diesel_premium" class="block text-white text-sm font-bold mb-2">Diesel Premium:</label>
                <input type="text"  name="diesel_premium" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_95_e5" class="block text-white text-sm font-bold mb-2">Gasolina 95 e5:</label>
                <input type="text"  name="gas_95_e5"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_98_e5" class="block text-white text-sm font-bold mb-2">Gasolina 98 e5:</label>
                <input type="text"  name="gas_98_e5" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="biodiesel" class="block text-white text-sm font-bold mb-2">Biodiesel:</label>
                <input type="text"  name="biodiesel" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="bioetanol" class="block text-white text-sm font-bold mb-2">Bioetanol:</label>
                <input type="text"  name="bioetanol"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="naturalGaslic" class="block text-white text-sm font-bold mb-2">Gas natural licuado:</label>
                <input type="text"  name="naturalGaslic" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="naturalGasComp" class="block text-white text-sm font-bold mb-2">Gas natural comprimido:</label>
                <input type="text"  name="naturalGasComp" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="petroleumGas" class="block text-white text-sm font-bold mb-2">Gases licuados del petroleo:</label>
                <input type="text"  name="petroleumGas" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="diesel_b" class="block text-white text-sm font-bold mb-2">Diesel B</label>
                <input type="text"  name="diesel_b"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_95_e10" class="block text-white text-sm font-bold mb-2">Gas 95 e10:</label>
                <input type="text"  name="gas_95_e10"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_95_e5_premium" class="block text-white text-sm font-bold mb-2">Gas 95 e5 Premiun:</label>
                <input type="text"  name="gas_95_e5_premium"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="gas_98_e10" class="block text-white text-sm font-bold mb-2">Gasolina 98 e10:</label>
                <input type="text"  name="gas_98_e10"  value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>

            <div class="mb-4">
                <label for="hydrogen" class="block text-white text-sm font-bold mb-2">Hidrogeno:</label>
                <input type="text"  name="hydrogen" value=' ' class="shadow appearance-none border rounded border-gray-500 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
            </div>
            
            <button type="submit" class="bg-transparent hover:bg-green-500 text-white font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded ml-40">Añadir</button>

        </form>

    </div>
    @endsection