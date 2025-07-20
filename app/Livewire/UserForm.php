<?php

namespace App\Livewire;

use App\Repositories\UserRepository;
use Livewire\Component;

class UserForm extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    protected UserRepository $userRepository;

    protected array $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ];

    protected array $messages = [
        'name.required' => 'O nome é obrigatório',
        'name.min' => 'O nome deve ter pelo menos 3 caracteres',
        'email.required' => 'O e-mail é obrigatório',
        'email.email' => 'Digite um e-mail válido',
        'email.unique' => 'Este e-mail já está em uso',
        'password.required' => 'A senha é obrigatória',
        'password.min' => 'A senha deve ter pelo menos 6 caracteres',
    ];

    public function boot(UserRepository $userRepository): void
    {
        $this->userRepository = $userRepository;
    }

    public function save(): void
    {
        $this->validate();

        $user = $this->userRepository->createUser($this->name, $this->email, $this->password);

        if (!$user) {
            $this->dispatch('swal:modal', [
                'type' => 'error',
                'title' => 'Erro!',
                'text' => 'Ocorreu um erro ao criar o usuário.'
            ]);
            return;
        }

        $this->dispatch('swal:modal', [
            'type' => 'success',
            'title' => 'Sucesso!',
            'text' => 'Usuário criado com sucesso!',
            'showConfirmButton' => true,
            'timer' => null,
            'onConfirmed' => 'redirectToLogin'
        ]);
    }

    public function render()
    {
        return view('livewire.user-form')->layout('components.layouts.app');
    }
}
