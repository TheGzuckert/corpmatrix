<div class="min-h-screen flex">
    <!-- Área da imagem (70%) -->
    <div class="w-[70%] bg-cover bg-center" style="background-image: url('/images/wallpaper.svg')"></div>

    <!-- Área do formulário (30%) -->
    <div class="w-[30%] flex items-center justify-center bg-white">
        <div class="w-full max-w-md px-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Login</h2>

            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <form wire:submit.prevent="login" class="space-y-6">
                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input wire:model="email"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="email"
                           type="email"
                           placeholder="Digite seu email">
                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Senha
                    </label>
                    <input wire:model="password"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="password"
                           type="password"
                           placeholder="********">
                    @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out"
                            type="submit">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="text-center mt-6">
                <a href="{{ route('register') }}" class="text-purple-600 hover:text-purple-700 text-sm transition duration-150 ease-in-out">
                    Não tem uma conta? Registre-se
                </a>
            </div>
        </div>
    </div>
</div> 