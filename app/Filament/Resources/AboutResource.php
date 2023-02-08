<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Builder::make('informations')
                    ->collapsible()
                    ->collapsed()
                    ->blocks([
                        Forms\Components\Builder\Block::make('about')
                            ->schema([
                                Forms\Components\RichEditor::make('about.me')
                                    ->label('About'),

                                Forms\Components\KeyValue::make('about.informations')->reorderable(),
                            ]),

                        Forms\Components\Builder\Block::make('sections')
                            ->schema([
                                Forms\Components\Repeater::make('sections')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Title'),

                                        Forms\Components\Repeater::make('items')
                                            ->schema([
                                                Forms\Components\TextInput::make('item')
                                            ])
                                    ])
                            ]),

                        Forms\Components\Builder\Block::make('progresses')
                            ->schema([
                                Forms\Components\Repeater::make('progress')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Title'),

                                        Forms\Components\Select::make('type')
                                            ->label('Barre de progression')
                                            ->options(
                                                [
                                                    'circular' => 'Circulaire',
                                                    'linear' => 'Linéaire'
                                                ]
                                            ),

                                        Forms\Components\KeyValue::make('items'),
                                    ])
                            ]),

                        Forms\Components\Builder\Block::make('dateables')
                            ->schema([
                                Forms\Components\Repeater::make('dateable')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->label('Title'),

                                        Forms\Components\Repeater::make('items')
                                            ->schema([
                                                Forms\Components\TextInput::make('date'),

                                                Forms\Components\Card::make([
                                                    Forms\Components\TextInput::make('title'),
                                                    Forms\Components\TextInput::make('subtitle'),
                                                ])
                                            ])
                                    ])
                            ])
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
            //
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
}
