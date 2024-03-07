<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Login extends Component
{

    #[Title('Login')]
    #[Layout('Components.Layouts.login')]
    public function render()
    {
        return view('livewire.login');
    }
}
