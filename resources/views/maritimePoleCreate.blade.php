@extends('index')
    @section('content')
    <form method="get" action="/storePole">
        @csrf
        <div>
            <label for="name"> Nombre:</label>
            <input type="text"  name="name" />
        </div>

        <div >
            <label for="port">Puerto:</label>
            <input type="text"  name="port"  />
        </div>
        <div >
            <label for="locality">Localidad:</label>
            <input type="text"  name="locality"  />
        </div>
        <div>
            <label for="Province">Provincia:</label>
            <select name="province">
                @foreach ( $data2 as $register )
                <option value="{{$register['id']}}">{{$register['name']}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="municipality">Municipio:</label>
            <select name="municipality">
                @foreach ( $data as $register2 )
              
                    <option value="{{$register2['id']}}">{{$register2['name']}}</option>
             
                @endforeach
            </select>
        </div>
        <div>
            <label for="address">Direccion:</label>
            <input type="text"  name="address"  />
        </div>
        <div >
            <label for="postalCode">Codigo Postal:</label>
            <input type="text"  name="postalCode"  />
        </div>
        <div>
            <label for="hours">Horario:</label>
            <input type="text"  name="hours"  />
        </div>

        <div>
            <label for="lat">Latitud:</label>
            <input type="text"  name="lat"  />
        </div>
        <div >
            <label for="long">Longitud:</label>
            <input type="text"  name="long" />
        </div>
        <div >
            <label for="diesel_a">DieselA:</label>
            <input type="text"  name="diesel_a"  value=' '/>
        </div>
        <div>
            <label for="diesel_b">Diesel B</label>
            <input type="text"  name="diesel_b"  value=' '/>
        </div>
        <div>
            <label for="maritime_diesel">Diesel uso maritimo:</label>
            <input type="text"  name="maritime_diesel" value=' ' />
        </div>
        <div >
            <label for="gas_95_e5">Gasolina 95 e5:</label>
            <input type="text"  name="gas_95_e5"  value=' '/>
        </div>
        <div >
            <label for="gas_95_e10">Gas 95 e10:</label>
            <input type="text"  name="gas_95_e10"  value=' '/>
        </div>
        
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
    @endsection