<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;
 

    //LOS CAMPOS QUE SE DEFINEN AQUI EN EL MODELO, COMO EN LAS MIGRACIONES, Y LUEGO EN EL FORMULARIO!!!
     
    protected $fillable = [
        'email',
        'name',
        'phone',
        // Otros atributos fillable que desees agregar
    ];

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    
}