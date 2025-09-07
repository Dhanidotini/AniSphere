<?php

namespace App\Livewire;

use App\Models\Series;
use Livewire\Component;

class Home extends Component
{
    public $series;
    public function mount()
    {
        $this->series = Series::all();
    }
    public function render()
    {
        return view('livewire.home');
    }
}
