<?php

namespace App\Http\Controllers;

use App\Models\formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'radio-correo' => ['required', 'string'],
            'radio-paq' => ['required', 'string'],
            'check-face' => ['string'],
            'check-whp' => ['string'],
            'check-ins' => ['string'],
            'check-tk' => ['string'],
            'check-tlm' => ['string'],
            'radio-com' => ['required', 'string'],
            'radio-pw' => ['required', 'string'],
            'radio-yt' => ['required', 'string'],
            'radio-fp' => ['required', 'string'],
            'radio-pc' => ['required', 'string'],
            'radio-tb' => ['required', 'string'],
            'radio-md' => ['required', 'string'],
            'radio-hm' => ['required', 'string'],
            'radio-ic' => ['required', 'string'],
            'radio-ec' => ['required', 'string'],
            'radio-nc' => ['required', 'string'],
        ]);

        $correo = isset($data['radio-correo']) ? $data['radio-correo'] : 'no';
        $paq = isset($data['radio-paq']) ? $data['radio-paq'] : 'no';
        $face = isset($data['check-face']) ? $data['check-face'] : 'no';
        $whp = isset($data['check-whp']) ? $data['check-whp'] : 'no';
        $ins = isset($data['check-ins']) ? $data['check-ins'] : 'no';
        $tk = isset($data['check-tk']) ? $data['check-tk'] : 'no';
        $tlm = isset($data['check-tlm']) ? $data['check-tlm'] : 'no';
        $com = isset($data['radio-com']) ? $data['radio-com'] : 'no';
        $pw = isset($data['radio-pw']) ? $data['radio-pw'] : 'no';
        $yt = isset($data['radio-yt']) ? $data['radio-yt'] : 'no';
        $fp = isset($data['radio-fp']) ? $data['radio-fp'] : 'no';
        $pc = isset($data['radio-pc']) ? $data['radio-pc'] : 'no';
        $tb = isset($data['radio-tb']) ? $data['radio-tb'] : 'no';
        $md = isset($data['radio-md']) ? $data['radio-md'] : 'no';
        $hm = isset($data['radio-hm']) ? $data['radio-hm'] : 'no';
        $ic = isset($data['radio-ic']) ? $data['radio-ic'] : 'no';
        $ec = isset($data['radio-ec']) ? $data['radio-ec'] : 'no';
        $nc = isset($data['radio-nc']) ? $data['radio-nc'] : 'no';

        $formulario = formulario::create([
            'radio-correo' => $correo,
            'radio-paq' => $paq,
            'check-face' => $face,
            'check-whp' => $whp,
            'check-ins' => $ins,
            'check-tk' => $tk,
            'check-tlm' => $tlm,
            'radio-com' => $com,
            'radio-pw' => $pw,
            'radio-yt' => $yt,
            'radio-fp' => $fp,
            'radio-pc' => $pc,
            'radio-tb' => $tb,
            'radio-md' => $md,
            'radio-hm' => $hm,
            'radio-ic' => $ic,
            'radio-ec' => $ec,
            'radio-nc' => $nc,
        ]);

        return view('home');
    }
}
