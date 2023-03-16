@extends('index')
    @section('content')
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>localidad</th>
                    <th>direccion</th>
                    <th>diesel A</th>
                    <th>diesel Premium</th>
                    <th>gasolina 95 e5</th>
                    <th>gasolina 98 e5</th>
                    <th>horario</th>
                </tr>    
            </thead>
            <tbody>
                @foreach($data as $register)
                    <tr  id="{{$register['id']}}">
                        <td>{{$register['rotulo']}}</td>
                        <td>{{$register['locality']}}</td>
                        <td>{{$register['address']}}</td>
                        <td>{{$register['diesel_oil_a']}}</td>
                        <td>{{$register['diesel_oil_premium']}}</td>
                        <td>{{$register['gas_95_e5']}}</td>
                        <td>{{$register['gas_98_e5']}}</td>
                        <td>{{$register['working_hours']}}</td>
                        <td>  
                            <a href="/edit/{{$register['id']}}" class="btn btn-primary">editar</a>
                        </td>
                        <td>
                            <form action="/destroy/{{$register['id']}}" method="get">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </td>

                        <td><a href="/mapa"><img src="" alt="icono no disponible"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection