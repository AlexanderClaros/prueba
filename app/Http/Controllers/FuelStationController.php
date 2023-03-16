<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\FuelStationModel;

class FuelStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = FuelStationModel::all();
        return view('fuelStation',['data'=>$data]);
        
    }
    public function upInfoDB()
    {
        $response = Http::get('https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/');
        $data=$response->json();
        foreach ($data['ListaEESSPrecio'] as $register) {
            FuelStationModel::create([
                
                'id'=>$register['IDEESS'],
                'locality'=>$register['Localidad'],
                'address'=>$register['Dirección'],
                'postal_code'=>$register['C.P.'],
                'rotulo'=>$register['Rótulo'],
                'working_hours'=>$register['Horario'],
                'lat'=>$register['Latitud'],
                'long'=>$register['Longitud (WGS84)'],
                'biodiesel'=>$register['Precio Biodiesel'],
                'bioetanol'=>$register['Precio Bioetanol'],
                'liquefied_natural_gas'=>$register['Precio Gas Natural Licuado'],
                'compressed_natural_gas'=>$register['Precio Gas Natural Comprimido'],
                'liquefied_petroleum_gases'=>$register['Precio Gases licuados del petróleo'],
                'diesel_oil_a'=>$register['Precio Gasoleo A'],
                'diesel_oil_b'=>$register['Precio Gasoleo B'],
                'diesel_oil_premium'=>$register['Precio Gasoleo Premium'],
                'gas_95_e10'=>$register['Precio Gasolina 95 E10'],
                'gas_95_e5'=>$register['Precio Gasolina 95 E5'],
                'gas_95_e5_premium'=>$register['Precio Gasolina 95 E5 Premium'],
                'gas_98_e10'=>$register['Precio Gasolina 98 E10'],
                'gas_98_e5'=>$register['Precio Gasolina 98 E5'],
                'hydrogen'=>$register['Precio Hidrogeno'],
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
