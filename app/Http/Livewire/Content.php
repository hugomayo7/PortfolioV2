<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public int $currentTab = 0;

    public function render()
    {
        return view('livewire.content')->layout('layouts.app');
    }

    public function updateCurrentTab(int $tab)
    {
        $this->currentTab = $tab;
    }
}
