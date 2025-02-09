<?php

namespace App\Livewire;

use Filament\Widgets\Widget;

class WhatsApp extends Widget
{
    protected static ?int $sort = -4;

    protected static bool $isLazy = false;

    protected static string $view = 'livewire.whats-app';
}
