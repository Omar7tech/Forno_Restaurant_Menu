<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Forno Flat Bread | Contact Us')]
    public function render()
    {
        $settings = app(\App\Settings\GeneralSettings::class);
        return view('livewire.contact' , compact('settings'));
    }
}
