@extends('index')
    @section('content')
    <form method="get" action="/update/{{$edit['id']}}">
        @method('PATCH') 
        @csrf
        <div>
           
            <label for="stock_name"> Nombre:</label>
            <input type="text"  name="name" value="{{ $edit['rotulo'] }}" />
        </div>

        <div >
            <label for="ticket">Localidad:</label>
            <input type="text"  name="locality" value="{{ $edit['locality'] }}" />
        </div>

        <div>
            <label for="value">Direccion:</label>
            <input type="text"  name="address" value="{{ $edit['address'] }}" />
        </div>
        <div >
            <label for="ticket">DieselA:</label>
            <input type="text"  name="diesel_a" value="{{ $edit['diesel_oil_a'] }}" />
        </div>

        <div>
            <label for="value">Diesel Premium:</label>
            <input type="text"  name="diesel_premium" value="{{ $edit['diesel_oil_premium'] }}" />
        </div>
        <div >
            <label for="ticket">Gasolina 95 e5:</label>
            <input type="text"  name="gas_95_e5" value="{{ $edit['gas_95_e5'] }}" />
        </div>

        <div>
            <label for="value">Gasolina 98 e5:</label>
            <input type="text"  name="gas_98_e5" value="{{ $edit['gas_98_e5'] }}" />
        </div>
        <div>
            <label for="value">Horario:</label>
            <input type="text"  name="hours" value="{{ $edit['working_hours'] }}" />
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    @endsection
    
   