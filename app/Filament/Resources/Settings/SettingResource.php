<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\Pages\ManageSettings;
use App\Models\Setting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Social Links & Settings';

    protected static ?string $modelLabel = 'Setting';

    protected static ?string $pluralModelLabel = 'Social Links & Settings';

    protected static ?int $navigationSort = 10;

    protected static ?string $recordTitleAttribute = 'label';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->label('Setting Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('key')
                    ->label('Setting Key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->disabledOn('edit'),

                Select::make('group')
                    ->label('Category')
                    ->options([
                        'social' => 'Social Media Links',
                        'contact' => 'Contact & Agency Info',
                        'general' => 'General Settings',
                    ])
                    ->default('social')
                    ->required(),

                Textarea::make('value')
                    ->label('Setting Value (URL, Phone, Email, Text)')
                    ->rows(3)
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('label')
            ->columns([
                TextColumn::make('group')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'social' => 'info',
                        'contact' => 'warning',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('label')
                    ->label('Setting')
                    ->searchable()
                    ->weight('bold')
                    ->sortable(),

                TextColumn::make('value')
                    ->label('Current Value')
                    ->limit(60)
                    ->searchable()
                    ->copyable()
                    ->tooltip(fn (Setting $record): ?string => $record->value),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('group')
                    ->options([
                        'social' => 'Social Media Links',
                        'contact' => 'Contact & Agency Info',
                        'general' => 'General Settings',
                    ]),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSettings::route('/'),
        ];
    }
}

