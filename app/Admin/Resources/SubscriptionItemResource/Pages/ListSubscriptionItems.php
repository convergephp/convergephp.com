<?php

namespace App\Admin\Resources\SubscriptionItemResource\Pages;

use App\Admin\Resources\SubscriptionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubscriptionItems extends ListRecords
{
    protected static string $resource = SubscriptionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
