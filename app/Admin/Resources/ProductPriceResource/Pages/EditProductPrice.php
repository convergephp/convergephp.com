<?php

namespace App\Admin\Resources\ProductPriceResource\Pages;

use App\Admin\Resources\ProductPriceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductPrice extends EditRecord
{
    protected static string $resource = ProductPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
