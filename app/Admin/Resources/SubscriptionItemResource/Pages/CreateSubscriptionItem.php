<?php

namespace App\Admin\Resources\SubscriptionItemResource\Pages;

use App\Admin\Resources\SubscriptionItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubscriptionItem extends CreateRecord
{
    protected static string $resource = SubscriptionItemResource::class;
}
