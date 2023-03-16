@extends('index')
    @section('content')
        <table>
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>puerto</th>
                    <th>localidad</th>
                    <th>direccion</th>
                    <th>diesel A</th>
                    <th>diesel B</th>
                    <th>diesel uso maritimo</th>
                    <th>gasolina 95 e5</th>
                    <th>horario</th>
                </tr>    
            </thead>
            <tbody>
                @foreach($data as $register)
                    <tr>
                        <td>{{$register['rotulo']}}</td>
                        <td>{{$register['port']}}</td>
                        <td>{{$register['locality']}}</td>
                        <td>{{$register['address']}}</td>
                        <td>{{$register['diesel_oil_a']}}</td>
                        <td>{{$register['diesel_oil_b']}}</td>
                        <td>{{$register['maritime_diesel']}}</td>
                        <td>{{$register['gas_95_e5']}}</td>
                        <td>{{$register['working_hours']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection