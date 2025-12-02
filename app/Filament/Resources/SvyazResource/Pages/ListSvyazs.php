<?php

namespace App\Filament\Resources\SvyazResource\Pages;

use App\Filament\Resources\SvyazResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSvyazs extends ListRecords
{
    protected static string $resource = SvyazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
