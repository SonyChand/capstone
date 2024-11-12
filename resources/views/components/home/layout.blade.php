<x-home.header>
    {{ $title }}
</x-home.header>

<x-home.navbar>
    {{ Str::lower($title) }}
</x-home.navbar>

<main class="main">
    {{ $slot }}
</main>


<x-home.footer>
    @slot('subtitle')
        {{ $title }}
    @endslot
</x-home.footer>
