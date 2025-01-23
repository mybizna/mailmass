<?php

namespace Modules\Mailmass\Filament\Resources;

use Modules\Base\Filament\Resources\BaseResource;
use Modules\Mailmass\Models\Group;

class GroupResource extends BaseResource
{
    protected static ?string $model = Group::class;

    protected static ?string $slug = 'mailmass/group';

    protected static ?string $navigationGroup = 'Mail';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

}
