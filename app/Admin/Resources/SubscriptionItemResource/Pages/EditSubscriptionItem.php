<?php

namespace App\Admin\Resources\SubscriptionItemResource\Pages;

use App\Admin\Resources\SubscriptionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscriptionItem extends EditRecord
{
    protected static string $resource = SubscriptionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
