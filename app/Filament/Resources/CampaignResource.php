<?php

namespace Modules\Mailmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mailmass\Models\Campaign;

class CampaignResource extends BaseResource
{
    protected static ?string $model = Campaign::class;

    protected static ?string $slug = 'mailmass/campaign';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
