<table>
<tr>
    <th>id</th>
    <th>nombre</th>
</tr>    
@foreach($data as $register)
    <tr>
        <td>{{$register['IDCCAA']}}</td>
        <td>{{$register['CCAA']}}</td>
    </tr>
@endforeach
</table>