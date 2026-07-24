<!DOCTYPE html>
<html>
<head>
    <title>Login Admin - 3D Low-Poly</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Segoe+UI:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1f4068, #162447, #1b1b2f);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .lowpoly-title {
            font-family: 'Orbitron', sans-serif;
            font-weight: 900;
            color: #ffffff;
            text-shadow: 3px 3px 0px #162447;
            letter-spacing: 1.5px;
        }
        .card {
            border: 3px solid #0f4c81;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 10px 10px 0px #0f4c81;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 14px 14px 0px #0f4c81;
        }
        .card-header {
            background: #ff6f59 !important;
            color: white;
            border-bottom: 3px solid #0f4c81;
            border-top-left-radius: 9px !important;
            border-top-right-radius: 9px !important;
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
        .btn-primary {
            background-color: #ff6f59;
            border: 2px solid #162447;
            border-radius: 8px;
            box-shadow: 4px 4px 0px #162447;
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            transition: all 0.1s ease;
        }
        .btn-primary:hover {
            background-color: #ff8e7e;
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px #162447;
        }
        .btn-primary:active {
            transform: translate(2px, 2px);
            box-shadow: 2px 2px 0px #162447;
        }
    </style>
</head>
<body>

<?php
$CI =& get_instance();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center py-3">
                    <h3 class="lowpoly-title fs-4 mb-0">💎 LOGIN ADMIN</h3>
                </div>
                <div class="card-body p-4">
                    <?php if($CI->session->flashdata('gagal')): ?>
                        <div class="alert alert-danger border-2 border-dark shadow-sm">
                            <?= $CI->session->flashdata('gagal'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('index.php/login/proses') ?>" method="post">
                        <div class="mb-3">
                            <label class="fw-bold mb-1">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="fw-bold mb-1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2">
                            MASUK SISTEM
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>