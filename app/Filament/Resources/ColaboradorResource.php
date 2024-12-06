<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColaboradorResource\Pages;
use App\Filament\Resources\ColaboradorResource\RelationManagers;
use App\Filament\Resources\ColaboradorResource\RelationManagers\EmpresasRelationManager;
use App\Filament\Resources\EmpresaResource\RelationManagers\ColaboradoresRelationManager;
use App\Models\Colaborador;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ColaboradorResource extends Resource
{
    protected static ?string $model = Colaborador::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $navigationLabel = 'Colaboradores';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->name('Nombre Completo')
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
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->native(false)
                    ->required(),
                // Forms\Components\Select::make('empresa_id')
                //     ->relationship('empresa', 'nombre_comercial')
                //     ->searchable()
                //     ->multiple()
                //     ->native()
                //     ->preload()
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo_electronico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                // EDAD
                    ->formatStateUsing(function($state){
                        // Convertir a carbon
                        $state = Carbon::parse($state);
                        $edad = $state->diffInYears(now());
                        return (int) $edad . ' años';
                    })
                    ->label('Edad')
                    ->sortable(),
                Tables\Columns\TextColumn::make('empresas.nombre_comercial')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
            ]);
    }

    public static function getRelations(): array
    {
        return [
            EmpresasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListColaboradors::route('/'),
            'create' => Pages\CreateColaborador::route('/create'),
            'edit' => Pages\EditColaborador::route('/{record}/edit'),
        ];
    }
}
