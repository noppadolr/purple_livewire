<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function handleLogout(){
        // dd('logout');
        // Auth::logout();
        Auth::guard('web')->logout();

       session()->invalidate();

        session()->regenerateToken();
        session()->flash('success', "you are loggedout Successfully!");
        return redirect(route('user.login'));
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
