<?php

namespace App\Admin\Resources\LicenseResource\Pages;

use App\Admin\Resources\LicenseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLicense extends CreateRecord
{
    protected static string $resource = LicenseResource::class;
}
