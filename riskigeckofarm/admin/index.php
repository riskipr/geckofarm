<?php
include('koneksi.php'); // agar index terhubung dengan database, maka koneksi sebagai penghubung harus di-include
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riski Gecko Farm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        @keyframes scale {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2); /* Ganti nilai 1.2 sesuai keinginan untuk perbesaran */
            }

            100% {
                transform: scale(1);
            }
        }

        .banner {
            overflow: hidden;
        }

        .banner img {
            width: 100%;
            animation: scale 6s infinite alternate; /* Ganti durasi (5s) sesuai keinginan */
        }
    </style>
</head>

<body class="bg-secondary">
    <div class="container-fluid border mb-4 mt-4 rounded-3 shadow bg-white">
        <!-- menu -->
        <header class="d-flex p-3 justify-content-center">
            <div>
                <img src="assets/images/Logo.png" alt="Logo" width="100" height="97">
            </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-4"><a href="index.php" class="text-decoration-none text-dark fw-bold"><h2>Home</h2></a></li>
                    <li class="list-inline-item mx-4"><a href="about.html" class="text-decoration-none text-dark fw-bold">About Us</a></li>
                    <li class="list-inline-item mx-4"><a href="contact.html" class="text-decoration-none text-dark fw-bold">Contact</a></li>
                    <li class="list-inline-item mx-4"><a href="front-form_create.php" class="btn btn-primary btn-sm">Tambah Gecko</a></li>
                    <li class="list-inline-item mx-4"><a href="admin.php" class="btn btn-primary btn-sm">Akun</a></li>
                </ul>
            </div>
        </header>
        <!-- banner -->
        <div class="banner px-4 mb-4">
            <img src="assets/images/wallpaperflare.com_wallpaper.jpg" class="w-100 rounded-3" alt="Gambar Wallpaper Gecko Farm" />
        </div>

        <!-- Menampilkan Produk -->
        <div class="row row-cols-3 gx-5 p-5">
            <?php
            $result = $conn->query("SELECT * FROM gecko");
            if ($result && $result->num_rows > 0) {
                while ($pecah = $result->fetch_assoc()) {
            ?>
                    <div class="col mb-5">
                        <div class="card shadow">
                            <img src="gambar/<?php echo $pecah['gambar_gecko']; ?> " class="card-img-top">
                            <div class="card-body">
                                <p class="card-text"><?php echo $pecah['morph']; ?></p>
                            </div>
                            <div class="d-none deskripsi">
                                <p>Indukan : <?php echo $pecah['parent']; ?></p>
                                <p>Jenis Kelamin : <?php echo $pecah['jenis_kelamin']; ?></p>
                                <p>Menetas : <?php echo $pecah['dob']; ?></p>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a class="btn btn-sm btn-primary d-block btnDetail">Detail</a>
                                <div class="col md-6">
                                    <a href="back-delete.php?id=<?php echo $pecah['id']; ?>" class="btn btn-danger">hapus</a>
                                    <a href="front-form_update.php?id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Edit</a>
                                </div>
                                <span class="ms-auto text-danger fw-bold d-block text-center harga">Rp. <?php echo number_format($pecah['harga']); ?></span>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
            ?>
                <p>Tidak ada produk yang ditemukan.</p>
            <?php
            }
            ?>
        </div>
        <!-- Copyright -->
        <footer class="text-center p-4 border-top">&copy;2024 - Riski Gecko Farm</footer>
        <!-- Modal -->
        <button type="button" class="btn btn-primary d-none btnModal" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="modalImage col-md-6 col-12"></div>
                        <div class="col-md-6 col-12">
                            <div class="modalDeskripsi"></div>
                            <div class="d-md-flex">
                                <a href="#" class="btn btn-sm btn-warning d-block btnBeli">Beli Gecko Ini</a>
                                <span class="ms-auto text-danger fw-bold d-block text-center modalHarga"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="assets/js/script.js"></script>
</body>

</html>
