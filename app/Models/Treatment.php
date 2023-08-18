<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Casts\MoneyCast;

class Treatment extends Model
{
    
    use HasFactory;
 

    //LOS CAMPOS QUE SE DEFINEN AQUI EN EL MODELO, COMO EN LAS MIGRACIONES, Y LUEGO EN EL FORMULARIO!!!
     
    protected $fillable = [
        'description',
        'notes',
        'price' => MoneyCast::class,
        // Otros atributos fillable que desees agregar
    ];


    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    
}
