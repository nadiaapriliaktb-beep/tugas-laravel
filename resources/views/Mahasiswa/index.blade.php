<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('mahasiswa.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    + Tambah Mahasiswa
                </a>

                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">NIM</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Program Studi</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $m)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $m->nim }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $m->nama_mahasiswa }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $m->program_studi }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $m->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('mahasiswa.edit', $m->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin hapus?')" class="text-red-600 hover:underline ml-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">
                                Belum ada data mahasiswa.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>