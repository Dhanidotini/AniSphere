<?php

namespace App\Filament\Resources\Series\RelationManagers;

use App\Filament\Resources\Episodes\EpisodeResource;
use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EpisodesRelationManager extends RelationManager
{
    protected static string $relationship = 'episodes';

    protected static ?string $relatedResource = EpisodeResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
                AssociateAction::make()
                    ->preloadRecordSelect()
                    ->recordSelectOptionsQuery(function (Builder $query) {
                        auth()->user()->can('associating_all_episodes::episode') ? $query : $query->whereBelongsTo(auth()->user());
                    })
                    ->multiple(),
            ])
            ->recordActions([
                DissociateAction::make()
                    ->authorize('disassociating_episodes::episode'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make()
                        ->authorizeIndividualRecords('disassociating_episodes::episode'),
                ])
            ]);
    }
}
