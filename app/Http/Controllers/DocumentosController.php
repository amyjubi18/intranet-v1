<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DocumentosController extends Controller
{
    public function Insertar(Request $request){


        try{
            DB::beginTransaction();

            $doc = new Documento;
            $doc->name=$request->get('name');
            $doc->description=$request->get('description');
            $doc->fecha=$request->get('fecha');

            if($request->hasFile('pdf')){
                $archiv= $request->file('pdf');
                $archiv->move(public_path().'/documentos/',$archiv->getClientOriginalName());
                $doc->documento=$archiv->getClientOriginalName();
            }
        $doc->save();
        DB::commit();
        }catch(Exception $e){
            DB::rollBack();
        }
    }


}
?>


