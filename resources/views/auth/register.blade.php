@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white shadow-md rounded p-8 space-y-4">
            <h1 class="text-2xl font-bold text-center">Register</h1>
            <form action="{{ url('api/register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-2">
                    <label class="block">Nama</label>
                    <input type="text" name="nama" class="w-full border p-2 rounded" required>
                </div>

                <div class="space-y-2">
                    <label class="block">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                </div>

                <div class="space-y-2">
                    <label class="block">Password</label>
                    <input type="password" name="password" class="w-full border p-2 rounded" required>
                </div>

                <div class="space-y-2">
                    <label class="block">No HP</label>
                    <input type="text" name="no_hp" class="w-full border p-2 rounded" required>
                </div>

                <div class="space-y-2">
                    <label class="block">Nama Kantor</label>
                    <input type="text" name="nama_kantor" class="w-full border p-2 rounded" required>
                </div>

                <div class="space-y-2">
                    <label class="block">Alamat</label>
                    <textarea name="alamat" class="w-full border p-2 rounded" required></textarea>
                </div>

                <div class="space-y-2">
                    <label class="block">Role</label>
                    <select name="role" class="w-full border p-2 rounded" required>
                        <option value="customer">Customer</option>
                        <option value="merchant">Merchant</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="block">Foto Profile</label>
                    <input type="file" name="foto_profile" class="w-full border p-2 rounded">
                </div>

                <div class="space-y-2">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
