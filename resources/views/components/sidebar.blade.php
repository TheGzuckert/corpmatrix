<div x-data="{ expanded: false }" 
     @mouseover="expanded = true" 
     @mouseleave="expanded = false"
     class="fixed top-12 left-0 h-[calc(100vh-3rem)] bg-purple-900 text-white transition-all duration-300"
     :class="expanded ? 'w-64' : 'w-20'">

    <nav class="mt-4">
        <div class="px-4 space-y-2">
            <!-- Grupo Econômico -->
            <a href="#" class="flex items-center py-3 px-4 rounded-lg hover:bg-purple-800 transition-colors">
                <div class="min-w-[24px] text-center">
                    <i class="fas fa-building text-xl"></i>
                </div>
                <span class="ml-4 transition-opacity" :class="expanded ? 'opacity-100' : 'opacity-0'">Grupo Econômico</span>
            </a>

            <!-- Unidade -->
            <a href="#" class="flex items-center py-3 px-4 rounded-lg hover:bg-purple-800 transition-colors">
                <div class="min-w-[24px] text-center">
                    <i class="fas fa-home text-xl"></i>
                </div>
                <span class="ml-4 transition-opacity" :class="expanded ? 'opacity-100' : 'opacity-0'">Unidade</span>
            </a>

            <!-- Colaborador -->
            <a href="#" class="flex items-center py-3 px-4 rounded-lg hover:bg-purple-800 transition-colors">
                <div class="min-w-[24px] text-center">
                    <i class="fas fa-users text-xl"></i>
                </div>
                <span class="ml-4 transition-opacity" :class="expanded ? 'opacity-100' : 'opacity-0'">Colaborador</span>
            </a>

            <!-- Relatórios -->
            <a href="#" class="flex items-center py-3 px-4 rounded-lg hover:bg-purple-800 transition-colors">
                <div class="min-w-[24px] text-center">
                    <i class="fas fa-chart-bar text-xl"></i>
                </div>
                <span class="ml-4 transition-opacity" :class="expanded ? 'opacity-100' : 'opacity-0'">Relatórios</span>
            </a>
        </div>
    </nav>
</div> 