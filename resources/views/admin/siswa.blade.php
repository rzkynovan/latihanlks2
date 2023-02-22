<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container w-screen mx-auto mt-12">
        <div class="header flex justify-between">
            <h2 class="text-4xl"><b>List Siswa</b></h2>
            <a href="{{ route('admin.tambahsiswa') }}" class="btn bg-gray-400 hover:bg-gray-600 text-white p-2 px-4">Tambah Data</a>
        </div>

        <table class="table table-primary table-bordered table-responsive text-center">
            <thead >
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Email</th>
                    <th>Nomor Hp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>Rizky Novan</td>
                    <td><img width="100" class="img-fluid d-flex" src="https://images.unsplash.com/photo-1517842536804-bf6629e2c291?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt=""></td>
                    <td>rikynovan21@gmail.com</td>
                    <td>085156248950</td>
                    <td>Jatirejo Loceret Nganjuk</td>
                    <td class="">
                        <a class="btn btn-primary" href="">Edit</a>
                        <a class="btn btn-danger" href="">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
