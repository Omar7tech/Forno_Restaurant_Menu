<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{


    public function render()
    {

        $categories = Category::active()
            ->orderBy('sort', 'asc')
            ->with(['products'])
            ->get();
        return view('livewire.home' , compact('categories'));
    }
}
