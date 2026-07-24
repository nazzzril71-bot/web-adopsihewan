<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin - 3D Low-Poly</title>
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
        .navbar-admin {
            background: #162447;
            border-bottom: 4px solid #ff6f59;
        }
        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 0.5px;
        }
        .card {
            border: 3px solid #162447;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 6px 6px 0px #162447;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 10px 10px 0px #162447;
        }
        .btn {
            border: 2px solid #162447;
            border-radius: 8px;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.85rem;
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
        .btn-light { background-color: #e4e9f7; }
        .stat-icon {
            font-size: 2.5rem;
            line-height: 1;
        }
        .card-header {
            background-color: #e4e9f7;
            border-bottom: 3px solid #162447;
            border-top-left-radius: 9px !important;
            border-top-right-radius: 9px !important;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-admin navbar-dark mb-4 py-3">
    <div class="container">
        <span class="navbar-brand fw-bold fs-5">🔺🐾 ADOPSIHEWAN ADMIN</span>
        <a href="<?= base_url('index.php/login/logout') ?>" class="btn btn-light btn-sm px-3 py-2">
            LOGOUT
        </a>
    </div>
</nav>

<div class="container mb-5">
    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="lowpoly-title mb-1">🐾 DASHBOARD ADMIN</h3>
        <p class="text-secondary fw-semibold">Ringkasan data sistem adopsi hewan tema 3D Low-Poly</p>
    </div>

    <!-- STAT CARDS -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="text-secondary fw-bold mb-1">Total Hewan</p>
                        <h2 class="fw-bold mb-0 text-dark" style="font-family: 'Orbitron', sans-serif;"><?= $total_pets ?></h2>
                    </div>
                    <div class="stat-icon">🐶</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="text-secondary fw-bold mb-1">Total Pengajuan</p>
                        <h2 class="fw-bold mb-0 text-dark" style="font-family: 'Orbitron', sans-serif;"><?= $total_adoptions ?></h2>
                    </div>
                    <div class="stat-icon">📋</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body d-flex align-items-center justify-content-between p-4">
                    <div>
                        <p class="text-secondary fw-bold mb-1">Total User</p>
                        <h2 class="fw-bold mb-0 text-dark" style="font-family: 'Orbitron', sans-serif;"><?= $total_users ?></h2>
                    </div>
                    <div class="stat-icon">👤</div>
                </div>
            </div>
        </div>
    </div>

    <!-- QUICK ACTIONS -->
    <div class="card">
        <div class="card-header py-3 fw-bold fs-5 text-dark" style="font-family: 'Orbitron', sans-serif;">
            ⚡ MENU CEPAT
        </div>
        <div class="card-body d-flex gap-3 flex-wrap p-4">
            <a href="<?= base_url('index.php/pet') ?>" class="btn btn-primary px-4 py-2">
                🐾 DATA HEWAN
            </a>
            <a href="<?= base_url('index.php/adoption') ?>" class="btn btn-light px-4 py-2 text-dark">
                📋 PENGAJUAN ADOPSI
            </a>
        </div>
    </div>
</div>

</body>
</html>