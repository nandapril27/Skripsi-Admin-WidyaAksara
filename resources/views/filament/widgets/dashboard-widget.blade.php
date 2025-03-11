<x-filament::widget>
    <x-filament::card>
        <div> <!-- Tambahkan elemen root -->
        <div class="flex justify-center mt-4"> <!-- Gunakan flexbox untuk center -->
    <div class="bg-white shadow-md rounded-lg p-4 max-w-xs w-fit text-center"> <!-- max-w-xs untuk kecilkan lebar -->
        <h2 class="text-lg font-semibold">Total Siswa :</h2>
        <p class="text-2xl font-bold">{{ $totalSiswa }}</p>
    </div>
</div>
        </div> <!-- Tutup elemen root -->
    </x-filament::card>
</x-filament::widget>
