<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\MaritimePoleModel;
use App\Models\MunicipalityModel;
use App\Models\ProvinceModel;

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
        return view('maritimePole',['data'=>$data]);
        
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
        return view('maritimePole',['data'=>$data]);
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
        return view('maritimePoleCreate',['data'=>$data],['data2'=>$data2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maritimePole = new MaritimePoleModel([
            'rotulo'=>$request->get('name'),
            'port'=>$request->get('port'),
            'locality'=>$request->get('locality'),
            'address'=>$request->get('address'),
            'diesel_oil_a'=>$request->get('diesel_a'),
            'maritime_diesel'=>$request->get('maritime_diesel'),
            'gas_95_e5'=>$request->get('gas_95_e5'),
            'working_hours'=>$request->get('hours'),
            'postal_code'=>$request->get('postalCode'),
            'lat'=>$request->get('lat'),
            'long'=>$request->get('long'),
            'diesel_oil_b'=>$request->get('diesel_b'),
            'gas_95_e10'=>$request->get('gas_95_e10'),
            'municipality_id'=>$request->get('municipality')
        ]);
        $maritimePole->save();
        return redirect('/maritimePole');
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
        $edit=MaritimePoleModel::find($id);
        return view('maritimePoleEdit',compact('edit'));
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
            'port'=>'required',
            'locality'=>'required',
            'address'=>'required',
            'diesel_a'=>'max:5',
            'diesel_b'=>'max:5',
            'maritime_diesel'=>'max:10',
            'gas_95_e5'=>'max:5',
            'hours'=>'required'
        ]); 
        $edit = MaritimePoleModel::find($id);
        $edit['rotulo'] =  $request->get('name');
        $edit['port'] = $request->get('port');
        $edit['locality'] = $request->get('locality');
        $edit['address'] = $request->get('address');
        $edit['diesel_oil_a'] =  $request->get('diesel_a');
        $edit['diesel_oil_b'] =  $request->get('diesel_b');
        $edit['maritime_diesel'] = $request->get('maritime_diesel');
        $edit['gas_95_e5'] = $request->get('gas_95_e5');
        $edit['working_hours'] = $request->get('hours');
        $edit->save();
        return redirect('/maritimePole');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = MaritimePoleModel::find($id);
        $destroy->delete();
        return redirect('/maritimePole');
    }
}
