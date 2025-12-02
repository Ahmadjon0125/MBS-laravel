<?php

namespace App\Filament\Resources\SvyazResource\Pages;

use App\Filament\Resources\SvyazResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSvyaz extends EditRecord
{
    protected static string $resource = SvyazResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
