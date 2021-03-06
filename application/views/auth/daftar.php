<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kesehatan adalah jalan ninja ku.">
    <meta name="author" content="Kelompok Webpro">
    <link rel="icon" href="<?= base_url($list_config['base_images']) ?>/icon.png">

    <title><?= $list_config['title'] ?></title>
    <link rel="stylesheet" href="<?= base_url($list_config['base_css']) ?>/fontawesome/css/all.min.css">
    <link href="<?= base_url($list_config['base_css']) ?>/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 100px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url() ?>"><i class="fas fa-hospital"></i> <?= $list_config['title'] ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">Halaman Utama</a>
                        </li>
                    </ul>
                    <div class="navbar-form navbar-left">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login') ?>">Masuk</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active" href="<?= base_url('register') ?>">Daftar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main role="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Daftar</div>
                        <div class="card-body">
                            <form action="<?= base_url('register') ?>" method="post" autocomplete="off">
                                <?php if (isset($error_message)) { ?>
                                    <div class="form-group row">
                                        <div class="alert alert-danger col-md-12" role="alert">
                                            <?= $error_message ?>
                                        </div>
                                    </div>
                                <?php } else if (isset($sukses_message)) { ?>
                                    <div class="form-group row">
                                        <div class="alert alert-success col-md-12" role="alert">
                                            <?= $sukses_message ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password2" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="password2" id="password2" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ttl" class="col-md-4 col-form-label text-md-right">Tanggal Lahir</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" name="ttl" id="ttl" required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        DAFTAR
                                    </button>
                                    <a href="<?= base_url('login'); ?>" class="btn btn-link">
                                        Sudah punya akun?
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="<?= base_url($list_config['base_js']) ?>/popper.min.js"></script>
    <script src="<?= base_url($list_config['base_js']) ?>/bootstrap.min.js"></script>
    <script src="<?= base_url($list_config['base_js']) ?>/holder.min.js"></script>
</body>

</html>