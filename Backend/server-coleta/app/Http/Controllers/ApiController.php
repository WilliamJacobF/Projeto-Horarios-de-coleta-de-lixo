<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Horario;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return Horario::all();
    }

    public function buscarPorNome($nome)
    {
        $rua = Horario::where('nomeRua', 'like', "%$nome%")->first();
        if (!$rua) {
            return response()->json(['mensagem' => 'Rua não encontrada'], 404);
        }

        return response()->json($rua);
    }
}