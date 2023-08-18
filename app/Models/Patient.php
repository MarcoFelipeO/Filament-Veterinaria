<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{



    use HasFactory;
 

    //LOS CAMPOS QUE SE DEFINEN AQUI EN EL MODELO, COMO EN LAS MIGRACIONES, Y LUEGO EN EL FORMULARIO!!!
         
        protected $fillable = [
            'name',
            'type',
            'date_of_birth',
            'owner_id'
            // Otros atributos fillable que desees agregar
        ];


    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
 
    public function treatments(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }



    
}
