@extends('index')
    @section('content')
    <form method="get" action="/updatePole/{{$edit['id']}}">
   
        @method('PATCH') 
        @csrf
        <div>
           
            <label for="stock_name"> Nombre:</label>
            <input type="text"  name="name" value="{{ $edit['rotulo'] }}" />
        </div>

        <div >
            <label for="port">Puerto:</label>
            <input type="text"  name="port" value="{{ $edit['port'] }}" />
        </div>
        <div >
            <label for="locality">Localidad:</label>
            <input type="text"  name="locality" value="{{ $edit['locality'] }}" />
        </div>

        <div>
            <label for="address">Direccion:</label>
            <input type="text"  name="address" value="{{ $edit['address'] }}" />
        </div>
        <div >
            <label for="diesel_a">DieselA:</label>
            <input type="text"  name="diesel_a" value="{{ $edit['diesel_oil_a'] }}" />
        </div>
        <div >
            <label for="diesel_b">DieselB:</label>
            <input type="text"  name="diesel_b" value="{{ $edit['diesel_oil_b'] }}" />
        </div>

        <div>
            <label for="maritime_diesel">Diesel uso maritimo:</label>
            <input type="text"  name="maritime_diesel" value="{{ $edit['maritime_diesel'] }}" />
        </div>
        <div >
            <label for="gas_95_e5">Gasolina 95 e5:</label>
            <input type="text"  name="gas_95_e5" value="{{ $edit['gas_95_e5'] }}" />
        </div>

        <div>
            <label for="hours">Horario:</label>
            <input type="text"  name="hours" value="{{ $edit['working_hours'] }}" />
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form> 
    @endsection