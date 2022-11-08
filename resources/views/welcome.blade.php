<x-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="header">
        <h1 class="text-center headtext">Benvenuto su Presto.it</h1>
        {{-- <p class="text-center pheadtext">i migliori annunci esistenti!</p> --}}
    </div>
</x-layout>
