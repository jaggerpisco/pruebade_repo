<?php

namespace App\Http\Livewire;

use App\Models\Dashboard;
use Livewire\Component;

class DashboardHcs extends Component
{
    public function render()
    {
        $contador = Dashboard::all();
        $usuarios = Dashboard::all();
        return view('livewire.dashboard-hcs', compact('contador','usuarios'));
    }
}
