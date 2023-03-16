<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\MaritimePoleModel;

class MaritimePoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          
        $data = MaritimePoleModel::all();
        return view('fuelStation',['data'=>$data]);
        
    }
    public function upInfoDB()
    {
        $response = Http::get('https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/PostesMaritimos/');
        $data=$response->json();
        foreach ($data['ListaEESSPrecio'] as $register) {
            MaritimePoleModel::create([
                
                'id'=>$register['IDPosteMaritimo'],
                'locality'=>$register['Localidad'],
                'port'=>$register['Puerto'],
                'address'=>$register['Dirección'],
                'postal_code'=>$register['C.P.'],
                'rotulo'=>$register['Rótulo'],
                'working_hours'=>$register['Horario'],
                'lat'=>$register['Latitud'],
                'long'=>$register['Longitud (WGS84)'],
                'diesel_oil_a'=>$register['Precio Gasoleo A habitual'],
                'diesel_oil_b'=>$register['Precio Gasoleo B'],
                'maritime_diesel'=>$register['Precio Gasóleo para uso marítimo'],
                'gas_95_e10'=>$register['Precio Gasolina 95 E10'],
                'gas_95_e5'=>$register['Precio Gasolina 95 E5'],
                'municipality_id'=>$register['IDMunicipio'],
                
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
