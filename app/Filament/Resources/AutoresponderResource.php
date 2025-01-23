<?php

namespace Modules\Mailmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mailmass\Models\Autoresponder;

class AutoresponderResource extends BaseResource
{
    protected static ?string $model = Autoresponder::class;

    protected static ?string $slug = 'mailmass/autoresponder';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
}
