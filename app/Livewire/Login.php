<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class Login extends Component
{
    #[Validate([
        'username' => 'required',
        'password'=>'required|min:3'
    ], message: [
        'required' => 'The :attribute is missing.',
        'username.required' => 'The :attribute are missing.',
        'min' => 'The :attribute is too short.',
    ], attribute: [
        'username' => 'Username',
        'password' => 'Password',
    ])]
    public $username;

    public $password;
    public $photo;
    public $login_error;



    #[Title('Login')]
    #[Layout('Components.Layouts.login')]
    public function handleSubmit(){
        $this->validate();
        // dd($this->username,$this->password);

        if(Auth::attempt(['username'=>$this->username,'password'=>$this->password])){
            session()->flash('success','You are Logged in Successfully !!');
            return redirect(route('admin.home'));
        }else{
            // session()->flash('login_error','Invalid username or password !!');
            $this->password='';
            $this->username='';
            session()->flash('login_error','username หรือ password ไม่ถูกต้อง !!');
            return redirect(route('user.login'));
            // return $this->login_error='Invalid username or password !!';
        }



    }//end method
    public function render()
    {
        return view('livewire.login');
    }
}
