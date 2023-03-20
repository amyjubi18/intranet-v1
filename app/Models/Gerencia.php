<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Gerencia extends Model
{
    use HasFactory;
    //relacion muchos a unos
    public function user(){
        return $this->belongsTo(User::class);
    }
}

?>
