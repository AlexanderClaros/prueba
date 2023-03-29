@extends('index')
    @section('content')

    <div class=" text-white w-full h-full font-serif bg-gray-800/75" >
        <div class="self-center">
            <h1 class=" text-center font-bold text-4xl">{{$edit['address']}}</h1>
        </div>
        <h1 class=" font-bold ml-96 mt-24 mb-5 text-2xl">Empresa: {{$edit['rotulo']}}        &nbsp; &nbsp; &nbsp;&nbsp;  Localidad:{{$edit['locality']}} &nbsp; &nbsp;  </h1>
         <h1 class="font-bold ml-96 mt-2 mb-5 text-2xl">   Horario:{{$edit['working_hours']}} </h1>
        <x-maps-leaflet  class="border-4 border-black w-2/4 mx-auto rounded-2xl max-h-96 mt-8"
            :centerPoint="[str_replace(',','.',$edit['lat']),str_replace(',','.',$edit['long'])]" 
            :markers="[[str_replace(',','.',$edit['lat']),str_replace(',','.',$edit['long'])]]" 
            :zoomLevel="17"
            >
        </x-maps-leaflet>
    </div>

    @endsection