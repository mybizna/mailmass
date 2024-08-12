<?php

namespace Modules\Mailmass\Filament\Resources\AutoresponderResource\Pages;

use Modules\Mailmass\Filament\Resources\AutoresponderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutoresponder extends EditRecord
{
    protected static string $resource = AutoresponderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
