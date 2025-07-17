@extends('layouts.app')

@section('content')
<div class="mb-6">
  <h1 class="text-3xl font-bold mb-4">📋 Data Vaksinasi Anak</h1>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <!-- Form Pencarian -->
  <form method="GET" class="mb-4 flex items-center gap-2">
    <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Cari nama / orang tua..." class="border border-gray-300 rounded px-3 py-2 w-1/3">
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Cari</button>
  </form>

  <!-- Tabel -->
  <div class="overflow-x-auto bg-white shadow rounded">
    <table class="w-full table-auto border-collapse">
      <thead class="bg-blue-100 text-left">
        <tr>
          <th class="px-4 py-2 border">#</th>
          <th class="px-4 py-2 border">Nama</th>
          <th class="px-4 py-2 border">Tanggal Lahir</th>
          <th class="px-4 py-2 border">JK</th>
          <th class="px-4 py-2 border">Orang Tua</th>
          <th class="px-4 py-2 border">Alamat</th>
          <th class="px-4 py-2 border">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($anaks as $anak)
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
          <td class="px-4 py-2 border">{{ $anak->nama }}</td>
          <td class="px-4 py-2 border">{{ $anak->tanggal_lahir }}</td>
          <td class="px-4 py-2 border">{{ $anak->jenis_kelamin }}</td>
          <td class="px-4 py-2 border">{{ $anak->nama_orang_tua }}</td>
          <td class="px-4 py-2 border">{{ $anak->alamat }}</td>
          <td class="px-4 py-2 border space-x-2">
            <a href="{{ route('anaks.edit', $anak->id) }}" class="text-blue-600">Edit</a>
            <form action="{{ route('anaks.destroy', $anak->id) }}" method="POST" class="inline">
              @csrf @method('DELETE')
              <button onclick="return confirm('Yakin ingin hapus?')" class="text-red-600">Hapus</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" class="text-center px-4 py-4 text-gray-500">Tidak ada data ditemukan.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="mt-4">
    {{ $anaks->withQueryString()->links() }}
  </div>
</div>
@endsection
