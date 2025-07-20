<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @livewireStyles
</head>
<body class="bg-gray-100">
    @auth
        <nav class="bg-white shadow-lg">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div>
                            <a href="{{ route('dashboard') }}" class="flex items-center py-4 px-2">
                                <span class="font-semibold text-gray-500 text-lg">Sistema de Usuários</span>
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="py-2 px-4 text-gray-500 hover:text-gray-700">
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endauth

    <main>
        {{ $slot }}
    </main>

    @livewireScripts

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('swal:modal', (event) => {
                Swal.fire({
                    title: event[0].title,
                    text: event[0].text,
                    icon: event[0].type,
                });
            });
        });
    </script>
</body>
</html>
