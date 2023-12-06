<?php
function getNavbar() {
    $navbar = '
    <div class="fixed bg-white top-0 h-screen  w-64 shadow-sm flex justify-between">
        <nav class="flex flex-col w-full p-4 gap-2">
            <a 
                href="/home" 
                class="flex items-center justify-center text-center transition-all p-2 border hover:opacity-80"
            >
                Ínicio
            </a>
            <a 
                href="/pessoa" 
                class="flex items-center justify-center text-center transition-all p-2 border hover:opacity-80"
            >
                Pessoas
            </a>
            <a 
                href="/logout" 
                class="flex items-center justify-center text-center transition-all p-2 border hover:opacity-80"
            >
                Sair
            </a>
        </nav>
    </div>
    ';
    return $navbar;
}