<?php

namespace App\Filament\Resources\Posts;

use App\Filament\Resources\Posts\Pages\ManagePosts;
use App\Models\Post;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name'),
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('excerpt')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->image(),
                TextInput::make('author_name')
                    ->required()
                    ->default('Shankar Investigation Team'),
                TextInput::make('author_title')
                    ->required()
                    ->default('Senior Case Investigator'),
                TextInput::make('reading_time_minutes')
                    ->required()
                    ->numeric()
                    ->default(5),
                Toggle::make('is_published')
                    ->required(),
                DateTimePicker::make('published_at'),
                TextInput::make('meta_title'),
                TextInput::make('meta_description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('category.name')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                ImageColumn::make('featured_image'),
                TextColumn::make('author_name')
                    ->searchable(),
                TextColumn::make('author_title')
                    ->searchable(),
                TextColumn::make('reading_time_minutes')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_published')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('meta_title')
                    ->searchable(),
                TextColumn::make('meta_description')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManagePosts::route('/'),
        ];
    }
}
