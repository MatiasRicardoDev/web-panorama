<?php

namespace App\Http\Controllers;

use App\Models\OficinaArroyo;
use App\Models\OficinaBahiaBlanca;
use App\Models\OficinaBuenosAires;
use App\Models\OficinaSanLorenzo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    

    public function main()
    {
        $sanLorenzo = OficinaSanLorenzo::find(1);
        $arroyo = OficinaArroyo::find(1);
        $buenosAires = OficinaBuenosAires::find(1);
        $bahiaBlanca = OficinaBahiaBlanca::find(1);
        return view('main',[
            'sanLorenzo'=>$sanLorenzo,
            'arroyo'=>$arroyo,
            'buenosAires'=>$buenosAires,
            'bahiaBlanca'=>$bahiaBlanca
        ]);
    }

    public function sanLorenzo(Request $request)
    {
        $sanLorenzo = OficinaSanLorenzo::find(1);
        $sanLorenzo->update($request->all());
        return redirect()->route('main')->with('success', 'Oficina de San Lorenzo Actualizada!');
    }

    public function arroyo(Request $request)
    {
        $arroyo = OficinaArroyo::find(1);
        $arroyo->update($request->all());
        return redirect()->route('main')->with('success', 'Oficina de Arroyo Seco Actualizada!');
    }

    public function bsas(Request $request)
    {
        $bsas = OficinaBuenosAires::find(1);
        $bsas->update($request->all());
        return redirect()->route('main')->with('success', 'Oficina de Buenos Aires Actualizada!');
    }

    public function bahia(Request $request)
    {
        $bahia = OficinaBahiaBlanca::find(1);
        $bahia->update($request->all());
        return redirect()->route('main')->with('success', 'Oficina de Bahia Blanca Actualizada!');
    }

}
