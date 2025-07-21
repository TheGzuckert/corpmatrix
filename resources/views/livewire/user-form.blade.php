<div class="min-h-screen flex">

<div class="w-[70%] bg-cover bg-center" style="background-image: url('/images/wallpaper.svg')"></div>

    <!-- Lado Direito - Formulário -->
    <div class="w-[30%] flex items-center justify-center bg-white">
        <div class="w-full max-w-md px-8">
            <h2 class="text-2xl font-semibold mb-6">Criar Conta</h2>

            <form wire:submit.prevent="save" class="space-y-6">
                <div>
                    <label class="text-sm text-gray-600">Nome</label>
                    <input wire:model="name" type="text" class="w-full mt-1 p-2 bg-gray-100 rounded focus:outline-none" placeholder="Digite seu nome" />
                    @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="text-sm text-gray-600">E-mail</label>
                    <input wire:model="email" type="email" class="w-full mt-1 p-2 bg-gray-100 rounded focus:outline-none" placeholder="exemplo@email.com" />
                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="text-sm text-gray-600">Senha</label>
                    <input wire:model="password" type="password" class="w-full mt-1 p-2 bg-gray-100 rounded focus:outline-none" placeholder="******" />
                    @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="w-full bg-purple-600 text-white p-2 rounded hover:bg-purple-700 transition duration-200">Criar Conta</button>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-sm text-purple-600 hover:text-purple-800">
                    ← Voltar ao Login
                </a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('swal:modal', event => {
        Swal.fire({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.type,
            showConfirmButton: event.detail.showConfirmButton ?? false,
            timer: event.detail.timer ?? 3000
        }).then((result) => {
            if (result.isConfirmed && event.detail.onConfirmed === 'redirectToLogin') {
                window.location.href = '{{ route('login') }}';
            }
        });
    });
</script>
@endpush
