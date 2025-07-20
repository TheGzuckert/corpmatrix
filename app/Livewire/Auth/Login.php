<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected array $messages = [
        'email.required' => 'O e-mail é obrigatório',
        'email.email' => 'Digite um e-mail válido',
        'password.required' => 'A senha é obrigatória',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('success', 'Login realizado com sucesso!');
            return redirect()->route('dashboard');
        }

        session()->flash('error', 'E-mail ou senha inválidos.');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.app');
    }
}
