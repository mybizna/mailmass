<?php

namespace Modules\Mailmass\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class MailmassPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Mailmass';
    }

    public function getId(): string
    {
        return 'mailmass';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
