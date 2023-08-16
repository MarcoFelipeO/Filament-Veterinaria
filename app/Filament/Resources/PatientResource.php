<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Symfony\Contracts\Service\Attribute\Required;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                //AQUI VA EL FORMULARIO DE CREAR NUESTROS PACIENTES

                        Forms\Components\TextInput::make('name')
                                //VALIDACIONES DEL CAMPO NOMBRE
                                    ->required()
                                    ->maxLength(255),
                        Forms\Components\Select::make('type')
                                    ->options([
                                        'cat' => 'Cat',
                                        'dog' => 'Dog',
                                        'rabbit' => 'Rabbit',
                                        'elephant' => 'Elephant',
                                        'tiger' => 'Tiger',
                                    ])
                                //VALIDACIONES DEL CAMPO 
                                    ->required(),
                        Forms\Components\DatePicker::make('date_of_birth')  
                                    ->required()
                                    ->maxDate(now()),
                                    Forms\Components\Select::make('owner_id')
                                    ->relationship('owner', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('email')
                                            ->label('Email address')
                                            ->email()
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\TextInput::make('phone')
                                            ->label('Phone number')
                                            ->tel()
                                            ->required(),
                                    ])
                                    ->required()

                                    
             // FIN DE ESQUEMA       END OF SCHEMA
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }    
}
