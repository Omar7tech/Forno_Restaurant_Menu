<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{


    public function render()
    {

        $settings = app(\App\Settings\GeneralSettings::class);
        $categories = Category::active()
            ->orderBy('sort', 'asc')
            ->with([
                'products' => function ($query) {
                    $query->active();
                },
                'products.media'
            ])
            ->get();
        return view('livewire.home', compact('categories', 'settings'));
    }
}
