<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use Illuminate\Contracts\Support\Htmlable;


use Illuminate\Contracts\View\View;


class Settings extends Page
{

 
    public function getTitle(): string | Htmlable
    {
        return __('Custom Page Title');   //nombre en la pagina 
    }

    protected ?string $subheading = 'Subtitulo de prueba';

    protected static ?string $navigationLabel = 'Apartado de Prueba';  //Nombre de pagina en lateral izquierdo
    

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';



       
    
    
   

}
