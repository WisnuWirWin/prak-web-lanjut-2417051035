<div class="table-responsive-wrapper">
    <table class="custom-table">
        <thead>
            <tr>
                <th style="width: 70px; text-align: center;">ID</th>
                <th>Nama Lengkap</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td style="text-align: center; font-weight: 600; color: #64748b;">
                        {{ $user->id }}
                    </td>
                    <td class="font-bold-cell">
                        {{ $user->nama }}
                    </td>
                    <td>
                        <span class="npm-badge">{{ $user->nim }}</span>
                    </td>
                    <td>
                        <span class="class-badge">{{ $user->nama_kelas }}</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="empty-state">
                        Belum ada data mahasiswa yang terdaftar.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    .table-responsive-wrapper {
        overflow-x: auto;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        text-align: left;
    }

    .custom-table thead {
        background: #f8fafc;
        border-bottom: 1px solid #e2e8f0;
    }

    .custom-table th {
        padding: 14px 20px;
        font-size: 13px;
        font-weight: 600;
        color: #475569;
    }

    .custom-table td {
        padding: 16px 20px;
        border-bottom: 1px solid #f1f5f9;
        color: #334155;
    }

    .custom-table tbody tr:last-child td {
        border-bottom: none;
    }

    .custom-table tbody tr:hover {
        background: #f8fafc;
    }

    .font-bold-cell {
        font-weight: 600;
        color: #1e293b;
    }

    .npm-badge {
        font-family: monospace;
        font-size: 13px;
        background: #f1f5f9;
        color: #334155;
        padding: 4px 8px;
        border-radius: 6px;
        border: 1px solid #e2e8f0;
    }

    .class-badge {
        display: inline-block;
        font-size: 12px;
        font-weight: 600;
        background: #eff6ff;
        color: #2563eb;
        padding: 4px 10px;
        border-radius: 9999px;
        border: 1px solid #dbeafe;
    }

    .empty-state {
        text-align: center;
        padding: 35px !important;
        color: #94a3b8;
        font-style: italic;
    }
</style>