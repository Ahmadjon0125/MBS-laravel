<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class AboutResource extends Resource
{


    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'About';
    protected static ?string $navigationLabel = 'About';

    protected static ?string $pluralModelLabel = 'Bo‘limlar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('img')
                    ->image()
                    ->disk('public')
                    ->deleteUploadedFileUsing(function ($file, $record) {
                        if ($record && $record->img) {
                            Storage::disk('public')->delete($record->img);
                        }
                    }),
                Forms\Components\TextInput::make('text')
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('shortText')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('poster')
                    ->image()
                    ->disk('public')
                    ->deleteUploadedFileUsing(function ($file, $record) {
                        if ($record && $record->poster) {
                            Storage::disk('public')->delete($record->poster);
                        }
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('img')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('poster')
                    ->searchable(),
                Tables\Columns\TextColumn::make('shortText')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
