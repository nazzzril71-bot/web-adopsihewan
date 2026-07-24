<!DOCTYPE html>
<html>
<head>
    <title>Edit Hewan - 3D Low-Poly</title>
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
        .btn-warning { background-color: #ffda77; border-color: #162447; }
        .btn-secondary { background-color: #e4e9f7; color: #162447; border-color: #162447; }
        img {
            border: 2px solid #162447;
            border-radius: 8px;
            box-shadow: 3px 3px 0px #162447;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="lowpoly-title mb-1">✏️ EDIT HEWAN</h3>
        <p class="text-secondary fw-semibold">Ubah data hewan dengan gaya 3D low-poly interaktif</p>
    </div>

    <!-- CARD FORM -->
    <div class="card">
        <div class="card-body p-4">
            <form method="post" action="<?= base_url('index.php/pet/update/'.$pet->id) ?>" enctype="multipart/form-data">
                <div class="row">
                    <!-- KIRI -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" name="name" value="<?= $pet->name ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Jenis</label>
                            <input type="text" name="type" value="<?= $pet->type ?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Umur</label>
                            <input type="number" name="age" value="<?= $pet->age ?>" class="form-control">
                        </div>
                    </div>

                    <!-- KANAN -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea name="description" class="form-control" rows="5"><?= $pet->description ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Foto Lama</label><br>
                            <?php if($pet->photo): ?>
                                <img src="<?= base_url('uploads/'.$pet->photo) ?>" width="120" class="mb-2">
                            <?php else: ?>
                                <span class="text-muted fw-bold">Tidak ada foto</span>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Ganti Foto</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- BUTTON -->
                <div class="mt-4 d-flex gap-2">
                    <button class="btn btn-warning px-4 py-2">UPDATE</button>
                    <a href="<?= base_url('index.php/pet') ?>" class="btn btn-secondary px-4 py-2">KEMBALI</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>