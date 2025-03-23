<?php

namespace App\Admin\Resources\ProductPriceResource\Pages;

use App\Admin\Resources\ProductPriceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductPrices extends ListRecords
{
    protected static string $resource = ProductPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
