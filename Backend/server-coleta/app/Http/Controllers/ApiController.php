<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Horario;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function show($id){
        return Horario::findOrFail($id);
    }
}
