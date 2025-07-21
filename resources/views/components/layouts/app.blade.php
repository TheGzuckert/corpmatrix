<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários</title>

    @livewireStyles
</head>
<body class="bg-gray-100">
    @auth
        <!-- Navbar Superior -->
        <nav class="bg-purple-900 shadow-lg fixed top-0 left-0 right-0 z-50 h-12">
            <div class="h-full px-4 flex justify-between items-center">
                <span class="font-semibold text-white text-lg">CorpMatrix</span>
                <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                    @csrf
                    <button type="submit" class="text-white hover:text-purple-200 transition duration-300 flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i> Sair
                    </button>
                </form>
            </div>
        </nav>

        <div class="flex">
            <x-sidebar />
            <div class="min-h-screen pl-20 w-full transition-all duration-300 pt-12">
                <main class="p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>
    @else
        {{ $slot }}
    @endauth

    @livewireScripts
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
