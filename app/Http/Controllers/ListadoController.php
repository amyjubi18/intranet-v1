<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ListadoController extends Controller
{
    public function index(){
        $query = DB::table('documentos')->get();
        return view('listado',['datos'=>$query]);
    }

}
?>
