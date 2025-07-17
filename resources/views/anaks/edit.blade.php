@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold mb-4">Edit Data Anak</h1>

@if ($errors->any())
  <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
    <ul class="list-disc ml-5">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('anaks.update', $anak->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
  @csrf
  @method('PUT')

  <div>
    <label>Nama</label>
    <input type="text" name="nama" value="{{ old('nama', $anak->nama) }}" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Tanggal Lahir</label>
    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $anak->tanggal_lahir) }}" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="w-full border px-4 py-2 rounded">
      <option value="Laki-laki" {{ old('jenis_kelamin', $anak->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
      <option value="Perempuan" {{ old('jenis_kelamin', $anak->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
    </select>
  </div>

  <div>
    <label>Nama Orang Tua</label>
    <input type="text" name="nama_orang_tua" value="{{ old('nama_orang_tua', $anak->nama_orang_tua) }}" class="w-full border px-4 py-2 rounded">
  </div>

  <div>
    <label>Alamat</label>
    <textarea name="alamat" class="w-full border px-4 py-2 rounded">{{ old('alamat', $anak->alamat) }}</textarea>
  </div>

  <div class="flex gap-4">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    <a href="{{ route('anaks.index') }}" class="text-gray-600">Batal</a>
  </div>
</form>
@endsection
