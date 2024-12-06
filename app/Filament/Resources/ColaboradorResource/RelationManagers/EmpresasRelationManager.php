<?php

namespace App\Filament\Resources\ColaboradorResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmpresasRelationManager extends RelationManager
{
    protected static string $relationship = 'empresas';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_comercial')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('razon_social')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nit')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('correo_electronico')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('municipio_id')
                    ->relationship('municipio', 'nombre')
                    ->searchable()
                    ->native()
                    ->preload()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nombre_comercial')
            ->columns([
                Tables\Columns\TextColumn::make('nombre_comercial'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
                Tables\Actions\AttachAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
