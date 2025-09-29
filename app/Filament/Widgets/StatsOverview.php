<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class StatsOverview extends StatsOverviewWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Products Count', Product::count())->chart([7, 2, 10, 3, 15, 4, 17])->color('success'),
            Stat::make('Category Count', Category::count())->chart([0, 5, 10, 2, 12, 4, 20])->color('success'),
        ];
    }
}
