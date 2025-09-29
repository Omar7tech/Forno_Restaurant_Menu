<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Widgets\ChartWidget;

class CategoryProductsChart extends ChartWidget
{
    protected ?string $heading = 'Category Products Chart';
    protected bool $isCollapsible = true;



    protected function getData(): array
    {
        $categoryNames = Category::pluck('name')->toArray();
        $productsCounts = Category::withCount('products')->pluck('products_count')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Products per Category',
                    'data' => $productsCounts,
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 205, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $categoryNames,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
