<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsuariosHcs extends Component
{
    public function render()
    {
        $users = User::all();
      return view('livewire.usuarios-hcs', compact('users'));
    }

    
}
