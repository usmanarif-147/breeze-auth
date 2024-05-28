<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public
        $email,
        $password;


    protected function rules()
    {
        return $this->loginFormValidation();
    }

    private function loginFormValidation()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function submitLogin()
    {
        $this->validate();

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {
            request()->session()->regenerate();
            $this->reset();
            $this->redirectRoute('admin.dashboard');
        } else {
            session()->flash('error', 'email and password are wrong.');
        }
    }


    public function render()
    {
        return view('livewire.admin.login');
    }
}
