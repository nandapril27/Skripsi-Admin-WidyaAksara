<x-filament::page>
    <div class="p-4 bg-white shadow rounded-lg">
        <p><strong>Nama     :</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email    :</strong> {{ auth()->user()->email }}</p>
        <p><strong>Password :</strong> <i>***** (disembunyikan)</i></p>
    </div>
</x-filament::page>
