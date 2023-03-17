<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\FuelStationModel;
use App\Models\MunicipalityModel;
use App\Models\ProvinceModel;

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
        return view('fuelStation',['data'=>$data]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = MunicipalityModel::all();
        $data2 = ProvinceModel::all();
        return view('fuelStationCreate',['data'=>$data],['data2'=>$data2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $fuelStation = new FuelStationModel([
            'rotulo'=>$request->get('name'),
            'locality'=>$request->get('locality'),
            'address'=>$request->get('address'),
            'diesel_oil_a'=>$request->get('diesel_a'),
            'diesel_oil_premium'=>$request->get('diesel_premium'),
            'gas_95_e5'=>$request->get('gas_95_e5'),
            'gas_98_e5'=>$request->get('gas_98_e5'),
            'working_hours'=>$request->get('hours'),
            'postal_code'=>$request->get('postalCode'),
            'lat'=>$request->get('lat'),
            'long'=>$request->get('long'),
            'biodiesel'=>$request->get('biodiesel'),
            'bioetanol'=>$request->get('bioetanol'),
            'liquefied_natural_gas'=>$request->get('naturalGaslic'),
            'compressed_natural_gas'=>$request->get('naturalGasComp'),
            'liquefied_petroleum_gases'=>$request->get('petroleumGas'),
            'diesel_oil_b'=>$request->get('diesel_b'),
            'gas_95_e10'=>$request->get('gas_95_e10'),
            'gas_95_e5_premium'=>$request->get('gas_95_e5_premium'),
            'gas_98_e10'=>$request->get('gas_98_e10'),
            'hydrogen'=>$request->get('hydrogen'),
            'municipality_id'=>$request->get('municipality')
        ]);
        $fuelStation->save();
        return redirect('/fuelStation');
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
        $edit=FuelStationModel::find($id);
        return view('fuelStationEdit',compact('edit'));
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
        $request->validate([
            'name'=>'required',
            'locality'=>'required',
            'address'=>'required',
            'diesel_a'=>'max:5',
            'diesel_premium'=>'max:5',
            'gas_95_e5'=>'max:5',
            'gas_98_e5'=>'max:5',
            'hours'=>'required'
        ]); 
        $edit = FuelStationModel::find($id);
       
        $edit['rotulo'] =  $request->get('name');
        $edit['locality'] = $request->get('locality');
        $edit['address'] = $request->get('address');
        $edit['diesel_oil_a'] =  $request->get('diesel_a');
        $edit['diesel_oil_premium'] = $request->get('diesel_premium');
        $edit['gas_95_e5'] = $request->get('gas_95_e5');
        $edit['gas_98_e5'] = $request->get('gas_98_e5');
        $edit['working_hours'] = $request->get('hours');
        $edit->save();
        return redirect('/fuelStation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FuelStationModel::find($id);
        $destroy->delete();
        return redirect('/fuelStation');
    }
}
