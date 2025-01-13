@props(['stamps'])

{{-- Paginación --}}
<div class="flex justify-center mt-8">
    <div class="flex items-center space-x-2">
        {{-- Botón Previous --}}
        <a href="{{ $stamps->onFirstPage() ? '#' : $stamps->previousPageUrl() }}"
            class="rounded-full border bg-green-500 text-white px-4 py-2 text-center text-sm transition-all shadow-sm hover:shadow-lg hover:bg-green-600 focus:bg-green-600 active:bg-green-700 disabled:pointer-events-none disabled:opacity-50 
            {{ $stamps->onFirstPage() ? 'opacity-50 pointer-events-none' : '' }}">
            Anterior
        </a>

        {{-- Números de página --}}
        @for ($i = 1; $i <= $stamps->lastPage(); $i++)
            <a href="{{ $stamps->url($i) }}"
                class="min-w-9 rounded-full px-4 py-2 text-center text-sm transition-all shadow-sm bg-green-500 text-white hover:bg-green-600 focus:bg-green-600 active:bg-green-700 
                {{ $stamps->currentPage() == $i 
                    ? 'bg-green-700 text-white' 
                    : 'border border-green-300 text-white' }}">
                {{ $i }}
            </a>
        @endfor

        {{-- Botón Next --}}
        <a href="{{ $stamps->hasMorePages() ? $stamps->nextPageUrl() : '#' }}"
            class="rounded-full border bg-green-500 text-white px-4 py-2 text-center text-sm transition-all shadow-sm hover:shadow-lg hover:bg-green-600 focus:bg-green-600 active:bg-green-700 disabled:pointer-events-none disabled:opacity-50 
            {{ $stamps->hasMorePages() ? '' : 'opacity-50 pointer-events-none' }}">
            Siguiente
        </a>
    </div>
</div>
