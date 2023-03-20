<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $table ='documentos';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = ['name', 'description','documento','fecha'];
}
