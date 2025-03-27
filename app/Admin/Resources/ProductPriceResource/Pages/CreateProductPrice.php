<?php

namespace App\Admin\Resources\ProductPriceResource\Pages;

use App\Admin\Resources\ProductPriceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProductPrice extends CreateRecord
{
    protected static string $resource = ProductPriceResource::class;
}
