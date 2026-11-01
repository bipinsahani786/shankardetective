@props([
    'items' => [],
])

<nav aria-label="Breadcrumb" class="bg-slate-50 border-b border-slate-200 py-3">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <ol class="flex items-center flex-wrap gap-2 text-xs text-slate-500">
            <li>
                <a href="{{ route('home') }}" class="flex items-center gap-1.5 text-slate-600 hover:text-blue-700 transition-colors font-medium">
                    <svg class="h-3.5 w-3.5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span>Home</span>
                </a>
            </li>

            @foreach($items as $item)
                <li class="flex items-center gap-2">
                    <span class="text-slate-300">/</span>
                    @if(!$loop->last && !empty($item['url']))
                        <a href="{{ $item['url'] }}" class="text-slate-600 hover:text-blue-700 transition-colors font-medium">
                            {{ $item['name'] }}
                        </a>
                    @else
                        <span class="text-blue-700 font-bold truncate max-w-[200px] sm:max-w-md">
                            {{ $item['name'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
</nav>
