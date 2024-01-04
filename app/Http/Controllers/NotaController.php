<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index(){
        return view('index', [
            'notas' => Nota::latest()->paginate()
        ]);
    }
}
