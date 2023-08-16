<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;
 

//LOS CAMPOS QUE SE DEFINEN TANTO EN EL MODELO, COMO EN LAS MIGRACIONES, DE ESTO SE TIENEN QUE DEFINIR AQUI!!!
     
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