<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AboutResource extends Resource
{
    use Translatable;

    protected static ?string $model = About::class;

    protected static ?string $label = 'CV';
    protected static ?string $pluralLabel = 'CV';

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Builder::make('informations')
                    ->collapsible()
                    ->collapsed()
                    ->label('Informations')
                    ->blocks([
                        Forms\Components\Builder\Block::make('about')
                            ->schema([
                                Forms\Components\RichEditor::make('about.me')
                                    ->label('Description'),

                                Forms\Components\KeyValue::make('about.informations')->reorderable(),
                            ])->label('Informations Principales'),

                        Forms\Components\Builder\Block::make('sections')
                            ->schema([
                                Forms\Components\Repeater::make('sections')
                                    ->label('Listes')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Titre'),

                                        Forms\Components\Repeater::make('items')
                                            ->schema([
                                                Forms\Components\TextInput::make('item')->label('Element')
                                            ])->label('Elements de la liste')
                                    ])
                            ])->label('Listes'),

                        Forms\Components\Builder\Block::make('progresses')
                            ->schema([
                                Forms\Components\Repeater::make('progress')
                                    ->label('Progressions')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Titre'),

                                        Forms\Components\Select::make('type')
                                            ->label('Barre de progression')
                                            ->options(
                                                [
                                                    'circular' => 'Circulaire',
                                                    'linear' => 'Linéaire'
                                                ]
                                            ),

                                        Forms\Components\KeyValue::make('items')->label('Elements')->reorderable(),
                                    ])
                            ])->label('Progressions'),

                        Forms\Components\Builder\Block::make('dateables')
                            ->schema([
                                Forms\Components\Repeater::make('dateable')
                                    ->label('Dates')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Title'),

                                        Forms\Components\Repeater::make('items')
                                            ->label('Elements')
                                            ->schema([
                                                Forms\Components\TextInput::make('date'),

                                                Forms\Components\Card::make([
                                                    Forms\Components\TextInput::make('title')->label('Titre'),
                                                    Forms\Components\TextInput::make('subtitle')->label('Sous-titre'),
                                                ])
                                            ])
                                    ])
                            ])->label('Dates')
                    ])
            ])->columns(1);
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
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        $about = About::firstOr(fn() => null);

        return [
            'index' => $about ? Pages\ListAbouts::route('/') : Pages\CreateAbout::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['fr'];
    }
}
