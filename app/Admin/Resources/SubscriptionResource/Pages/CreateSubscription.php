<?php

namespace App\Admin\Resources\SubscriptionResource\Pages;

use App\Admin\Resources\SubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubscription extends CreateRecord
{
    protected static string $resource = SubscriptionResource::class;
}
