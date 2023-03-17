@extends('index')
    @section('content')
    <form method="get" action="/store">
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
            <label for="diesel_premium">Diesel Premium:</label>
            <input type="text"  name="diesel_premium" value=' ' />
        </div>
        <div >
            <label for="gas_95_e5">Gasolina 95 e5:</label>
            <input type="text"  name="gas_95_e5"  value=' '/>
        </div>

        <div>
            <label for="gas_98_e5">Gasolina 98 e5:</label>
            <input type="text"  name="gas_98_e5" value=' '/>
        </div>
        <div>
            <label for="biodiesel">Biodiesel:</label>
            <input type="text"  name="biodiesel" value=' '/>
        </div>
        <div >
            <label for="bioetanol">Bioetanol:</label>
            <input type="text"  name="bioetanol"  value=' '/>
        </div>

        <div>
            <label for="naturalGaslic">Gas natural licuado:</label>
            <input type="text"  name="naturalGaslic" value=' '/>
        </div>
        <div>
            <label for="naturalGasComp">Gas natural comprimido:</label>
            <input type="text"  name="naturalGasComp" value=' '/>
        </div>
        <div >
            <label for="petroleumGas">Gases licuados del petroleo:</label>
            <input type="text"  name="petroleumGas" value=' ' />
        </div>

        <div>
            <label for="diesel_b">Diesel B</label>
            <input type="text"  name="diesel_b"  value=' '/>
        </div>
        <div >
            <label for="gas_95_e10">Gas 95 e10:</label>
            <input type="text"  name="gas_95_e10"  value=' '/>
        </div>

        <div>
            <label for="gas_95_e5_premium">Gas 95 e5 Premiun:</label>
            <input type="text"  name="gas_95_e5_premium"  value=' '/>
        </div>
        <div >
            <label for="gas_98_e10">Gasolina 98 e10:</label>
            <input type="text"  name="gas_98_e10"  value=' '/>
        </div>

        <div>
            <label for="hydrogen">Hidrogeno:</label>
            <input type="text"  name="hydrogen" value=' '/>
        </div>
        
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
    @endsection