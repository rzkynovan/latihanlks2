<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container w-screen mx-auto mt-12">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control">
            </div>
        </form>
    </div>
</x-app-layout>
