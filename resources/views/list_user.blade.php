@extends('layouts.app')

@section('content')

<style>
    .user-page {
        padding: 40px 20px;
    }

    .user-wrapper-list {
        max-width: 900px;
        margin: 0 auto;
    }

    .page-header-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .page-header-flex h1 {
        margin: 0 0 6px;
        font-size: 26px;
        font-weight: 700;
        color: #1e293b;
    }

    .page-header-flex p {
        margin: 0;
        color: #64748b;
        font-size: 14px;
    }

    .list-card {
        background: #ffffff;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(15, 23, 42, 0.05);
        border: 1px solid #e2e8f0;
        overflow: hidden;
    }

    .btn-create {
        height: 42px;
        padding: 0 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        background: #2563eb;
        color: #ffffff;
        border: none;
        transition: 0.2s ease;
    }

    .btn-create:hover {
        background: #1d4ed8;
    }

    @media (max-width: 600px) {
        .user-page {
            padding: 25px 15px;
        }

        .page-header-flex {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .btn-create {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="user-page">
    <div class="user-wrapper-list">

        <div class="page-header-flex">
            <div>
                <h1>Daftar Pengguna</h1>
                <p>Data mahasiswa yang terdaftar di dalam database kelas.</p>
            </div>
            <a href="{{ route('user.create') }}" class="btn-create">
                + Tambah Pengguna
            </a>
        </div>

        <div class="list-card">
            @include('components.user_table', ['users' => $users])
        </div>

    </div>
</div>

@endsection