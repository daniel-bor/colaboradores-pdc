<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaisResource\Pages;
use App\Filament\Resources\PaisResource\RelationManagers;
use App\Models\Pais;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaisResource extends Resource
{
    protected static ?string $model = Pais::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-americas';

    protected static ?string $navigationGroup = 'Configuración';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('iso')
                //     ->maxLength(255)
                //     ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('iso')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->name('creado')
                    ->dateTime('d/m/Y')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPais::route('/'),
            // 'create' => Pages\CreatePais::route('/create'),
            // 'edit' => Pages\EditPais::route('/{record}/edit'),
        ];
    }
}
