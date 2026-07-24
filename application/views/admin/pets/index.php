<!DOCTYPE html>
<html>
<head>
    <title>Data Hewan - 3D Low-Poly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f3f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .lowpoly-title {
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            color: #162447;
            text-shadow: 2px 2px 0px #ff6f59;
            letter-spacing: 1px;
        }
        .card {
            border: 3px solid #162447;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 6px 6px 0px #162447;
        }
        .table thead {
            background: #162447;
            color: white;
            border-bottom: 3px solid #ff6f59;
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 0.5px;
        }
        .table th, .table td {
            border-bottom: 2px solid #e4e9f7;
            vertical-align: middle;
        }
        .btn {
            border: 2px solid #162447;
            border-radius: 8px;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            box-shadow: 3px 3px 0px #162447;
            transition: all 0.1s ease;
        }
        .btn:hover {
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0px #162447;
        }
        .btn:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px #162447;
        }
        .btn-primary { background-color: #ff6f59; border-color: #162447; }
        .btn-outline-secondary { background-color: #e4e9f7; color: #162447; }
        .btn-outline-warning { background-color: #ffda77; color: #162447; }
        .btn-outline-danger { background-color: #ff6b6b; color: #fff; }
        img {
            border: 2px solid #162447;
            border-radius: 8px;
            box-shadow: 2px 2px 0px #162447;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <!-- HEADER / NAVIGATION -->
    <div class="mb-4">
        <a href="<?= base_url('index.php/dashboard') ?>" class="btn btn-outline-secondary btn-sm mb-3 px-3 py-2">
            ← KEMBALI KE DASHBOARD
        </a>
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="lowpoly-title mb-0">🐾 DATA HEWAN</h3>
            <a href="<?= base_url('index.php/pet/create') ?>" class="btn btn-primary px-4 py-2">
                + TAMBAH HEWAN
            </a>
        </div>
    </div>

    <!-- CARD -->
    <div class="card">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table align-middle text-center">
                    <thead>
                        <tr>
                            <th class="py-3">FOTO</th>
                            <th class="py-3">NAMA</th>
                            <th class="py-3">JENIS</th>
                            <th class="py-3">UMUR</th>
                            <th class="py-3">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($pets as $p): ?>
                        <tr>
                            <td>
                                <?php if(!empty($p->photo)): ?>
                                    <img src="<?= base_url('uploads/'.$p->photo) ?>" width="70" height="70" style="object-fit:cover;">
                                <?php else: ?>
                                    <span class="text-muted fw-bold">-</span>
                                <?php endif; ?>
                            </td>
                            <td class="fw-bold text-dark"><?= $p->name ?></td>
                            <td class="fw-semibold text-secondary"><?= $p->type ?></td>
                            <td class="fw-semibold text-secondary"><?= $p->age ?> th</td>
                            <td>
                                <a href="<?= base_url('index.php/pet/edit/'.$p->id) ?>" class="btn btn-sm btn-outline-warning px-3 py-1">
                                    EDIT
                                </a>
                                <a href="<?= base_url('index.php/pet/delete/'.$p->id) ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-outline-danger px-3 py-1">
                                    HAPUS
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>