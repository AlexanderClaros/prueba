@extends('index')
    @section('content')
    <form method="get" action="/update/{{$edit['id']}}">
        @csrf
        <div>
            <label for="name"> Nombre:</label>
            <input type="text"  name="name" />
        </div>

        <div >
            <label for="locality">Localidad:</label>
            <input type="text"  name="locality"  />
        </div>
        <div>
            <label for="municipality">Municipio:</label>
            <input type="text"  name="municipality" />
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
            <input type="text"  name="diesel_a"  />
        </div>

        <div>
            <label for="diesel_premium">Diesel Premium:</label>
            <input type="text"  name="diesel_premium"  />
        </div>
        <div >
            <label for="gas_95_e5">Gasolina 95 e5:</label>
            <input type="text"  name="gas_95_e5"  />
        </div>

        <div>
            <label for="gas_98_e5">Gasolina 98 e5:</label>
            <input type="text"  name="gas_98_e5" />
        </div>
        <div>
            <label for="biodiesel">Biodiesel:</label>
            <input type="text"  name="biodiesel" />
        </div>
        <div >
            <label for="bioetanol">Bioetanol:</label>
            <input type="text"  name="bioetanol"  />
        </div>

        <div>
            <label for="naturalGaslic">Gas natural licuado:</label>
            <input type="text"  name="naturalGaslic" />
        </div>
        <div>
            <label for="naturalGasComp">Gas natural comprimido:</label>
            <input type="text"  name="naturalGasComp" />
        </div>
        <div >
            <label for="petroleumGas">Gases licuados del petroleo:</label>
            <input type="text"  name="petroleumGas"  />
        </div>

        <div>
            <label for="diesel_b">Diesel B</label>
            <input type="text"  name="diesel_b"  />
        </div>
        <div >
            <label for="gas_95_e10">Gas 95 e10:</label>
            <input type="text"  name="gas_95_e10"  />
        </div>

        <div>
            <label for="gas_95_e5_premium">Gas 95 e5 Premiun:</label>
            <input type="text"  name="gas_95_e5_premium"  />
        </div>
        <div >
            <label for="gas_98_e10">Gasolina 98 e10:</label>
            <input type="text"  name="gas_98_e10"  />
        </div>

        <div>
            <label for="hydrogen">Hidrogeno:</label>
            <input type="text"  name="hydrogen" />
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    @endsection