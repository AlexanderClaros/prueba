@extends('index')
    @section('content')
    <div>
        <h1 class="font-bold ml-96">{{$edit['address']}}</h1>
        <h1 class="font-bold ml-96">{{$edit['rotulo']}}</h1>
        <x-maps-leaflet  class="w-2/4 mx-auto rounded-2xl max-h-96"
            :centerPoint="[str_replace(',','.',$edit['lat']),str_replace(',','.',$edit['long'])]" 
            :markers="[[str_replace(',','.',$edit['lat']),str_replace(',','.',$edit['long'])]]" 
            :zoomLevel="17"
            >
        </x-maps-leaflet>
    </div>

    @endsection