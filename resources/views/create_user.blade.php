@extends('layouts.app')

@section('content')

<style>
    .user-page {
        padding: 40px 20px;
    }

    .user-wrapper {
        max-width: 650px;
        margin: 0 auto;
    }

    .page-header {
        margin-bottom: 25px;
    }

    .page-header h1 {
        margin: 0 0 6px;
        font-size: 26px;
        font-weight: 700;
        color: #1e293b;
    }

    .page-header p {
        margin: 0;
        color: #64748b;
        font-size: 14px;
    }

    .form-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(15, 23, 42, 0.05);
        border: 1px solid #e2e8f0;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        font-weight: 600;
        color: #334155;
    }

    .form-control-custom {
        width: 100%;
        height: 44px;
        padding: 0 14px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        background: #ffffff;
        color: #1e293b;
        font-size: 14px;
        outline: none;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control-custom::placeholder {
        color: #94a3b8;
    }

    .form-control-custom:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
    }

    select.form-control-custom {
        cursor: pointer;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 12px;
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #f1f5f9;
    }

    .btn-custom {
        height: 42px;
        padding: 0 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.2s;
    }

    .btn-cancel {
        background: #ffffff;
        color: #475569;
        border: 1px solid #cbd5e1;
    }

    .btn-cancel:hover {
        background: #f1f5f9;
        color: #1e293b;
    }

    .btn-submit {
        background: #2563eb;
        color: #ffffff;
        border: none;
    }

    .btn-submit:hover {
        background: #1d4ed8;
    }

    @media (max-width: 600px) {
        .user-page {
            padding: 25px 15px;
        }

        .form-card {
            padding: 20px;
        }

        .page-header h1 {
            font-size: 22px;
        }

        .form-actions {
            flex-direction: column-reverse;
        }

        .btn-custom {
            width: 100%;
        }
    }
</style>

<div class="user-page">
    <div class="user-wrapper">

        <div class="page-header">
            <h1>Buat Pengguna Baru</h1>
            <p>Tambahkan data pengguna baru ke dalam sistem.</p>
        </div>

        <div class="form-card">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        class="form-control-custom"
                        placeholder="Masukkan nama lengkap"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input
                        type="text"
                        id="npm"
                        name="npm"
                        value="{{ old('npm') }}"
                        class="form-control-custom"
                        placeholder="Masukkan NPM"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    <select
                        name="kelas_id"
                        id="kelas_id"
                        class="form-control-custom"
                        required
                    >
                        <option value="" selected disabled>-- Pilih Kelas --</option>

                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}" {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-actions">
                    <a href="{{ url('/user') }}" class="btn-custom btn-cancel">Batal</a>
                    <button type="submit" class="btn-custom btn-submit">Simpan Pengguna</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection