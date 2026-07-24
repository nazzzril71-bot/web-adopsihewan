<!DOCTYPE html>
<html>
<head>
    <title>Tambah Hewan - 3D Low-Poly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f3f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border: 3px solid #162447;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 6px 6px 0px #162447;
        }
        .card-header {
            background: #ff6f59 !important;
            color: white;
            border-bottom: 3px solid #162447;
            border-top-left-radius: 9px !important;
            border-top-right-radius: 9px !important;
            font-family: 'Orbitron', sans-serif;
            font-weight: 800;
            letter-spacing: 0.5px;
        }
        .form-control {
            border: 2px solid #162447;
            border-radius: 8px;
            box-shadow: 3px 3px 0px #162447;
            font-weight: 600;
        }
        .form-control:focus {
            box-shadow: 4px 4px 0px #ff6f59;
            border-color: #ff6f59;
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
        .btn-outline-secondary { background-color: #e4e9f7; color: #162447; border-color: #162447; }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header py-3 fs-5">
                    🐾 TAMBAH HEWAN BARU
                </div>
                <div class="card-body p-4">
                    <form method="post" action="<?= base_url('index.php/pet/store') ?>" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis</label>
                            <input type="text" name="type" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Umur</label>
                            <input type="number" name="age" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Foto</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="d-flex gap-2 pt-2">
                            <button type="submit" class="btn btn-primary px-4 py-2">SIMPAN</button>
                            <a href="<?= base_url('index.php/pet') ?>" class="btn btn-outline-secondary px-4 py-2">KEMBALI</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>