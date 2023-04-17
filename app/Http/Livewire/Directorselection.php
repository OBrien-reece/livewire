<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Directorselection extends Component
{

    public $selected_director = '';

    public function render()
    {
        return view('livewire.directorselection');
    }
}
