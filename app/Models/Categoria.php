<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function categoria(){
        /* $categoria= DB::select('SELECT categoria FROM categiorias WHERE id'); */
        return $this->belongsTo(Documento::class);
    }
}
