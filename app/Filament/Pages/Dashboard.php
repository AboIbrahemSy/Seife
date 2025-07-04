<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Support\Enums\ActionSize;
use App\Filament\Widgets\DasboardOverview;


class Dashboard extends \Filament\Pages\Dashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 12;
    }

    public function getHeaderWidgets(): array
    {
        return [
            \Awcodes\Overlook\Widgets\OverlookWidget::class
        ];
    }
}
