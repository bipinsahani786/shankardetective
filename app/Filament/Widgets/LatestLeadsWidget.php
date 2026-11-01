<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestLeadsWidget extends BaseWidget
{
    protected static bool $isLazy = false;

    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Lead::query()->latest()->limit(10))
            ->heading('Confidential Client Inquiries & Field Consultation Requests')
            ->description('Incoming leads from across Indore HQ, Pune, Mumbai, Ahmedabad, and all operational bureaus.')
            ->columns([
                TextColumn::make('name')
                    ->label('Client / Alias')
                    ->weight('bold')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Helpline Contact')
                    ->icon(Heroicon::OutlinedPhone)
                    ->url(fn (Lead $record): string => "tel:{$record->phone}")
                    ->color('primary'),

                TextColumn::make('city')
                    ->label('Bureau / City')
                    ->badge()
                    ->color('gray')
                    ->default('Indore HQ'),

                TextColumn::make('service_requested')
                    ->label('Investigation Category')
                    ->limit(26)
                    ->default('Case Consultation'),

                TextColumn::make('urgency')
                    ->label('Priority')
                    ->badge()
                    ->color(fn (?string $state): string => match (strtolower($state ?? '')) {
                        'emergency', 'critical', 'immediate' => 'danger',
                        'within 24 hours', 'high' => 'warning',
                        default => 'gray',
                    }),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (?string $state): string => match (strtolower($state ?? '')) {
                        'new' => 'warning',
                        'in_progress', 'assigned' => 'info',
                        'completed', 'resolved', 'contacted' => 'success',
                        default => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Logged At')
                    ->since()
                    ->sortable(),
            ])
            ->recordActions([
                Action::make('assign')
                    ->label('Mark In Progress')
                    ->icon(Heroicon::OutlinedShieldCheck)
                    ->color('info')
                    ->visible(fn (Lead $record): bool => $record->status === 'new')
                    ->action(fn (Lead $record) => $record->update(['status' => 'in_progress'])),

                Action::make('resolve')
                    ->label('Resolve Case')
                    ->icon(Heroicon::OutlinedClipboardDocumentCheck)
                    ->color('success')
                    ->visible(fn (Lead $record): bool => $record->status === 'in_progress')
                    ->action(fn (Lead $record) => $record->update(['status' => 'completed'])),
            ]);
    }
}
