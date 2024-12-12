<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM gecko WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>

<head>
    <title>Leopard Gecko</title>
    <style type="text/css">
    * {
        font-family: "Trebuchet MS";
    }

    h1 {
        text-transform: uppercase;
        color: lightslategray;
    }

    button {
        background-color: lightslategray;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        font-size: 15px;
        border: 0px;
        margin-top: 20px;
    }

    label {
        margin-top: 10px;
        float: center;
        text-align: center;
        width: 100%;
    }

    input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: lightslategray;
    }

    div {
        width: 100%;
        height: auto;
    }

    .base {
        width: 500px;
        height: auto;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background: #ededed;
    }
    </style>
</head>

<body>
    <center>
        <h1>Edit Data Gecko <?php echo $data['morph']; ?></h1>
        <center>
            <form method="POST" action="back-update.php" enctype="multipart/form-data">
                <section class="base">
                    <!-- menampung nilai id gecko yang akan di edit -->
                    <input name="id" value="<?php echo $data['id']; ?>" hidden />
                    <div>
                        <label></label>
                        <img src="gambar/<?php echo $data['gambar_gecko']; ?>"
                            style="width: 180px;float: center;margin-bottom: 10px;">
                        <input type="file" name="gambar_gecko" />
                        <i style="float: center;font-size: 11px;color: red">Abaikan jika tidak merubah foto geckonya</i>
                    </div>
                    <div>
                        <label>Morph</label>
                        <input type="text" name="morph" value="<?php echo $data['morph']; ?>" autofocus=""
                            required="" />
                    </div>
                    <div>
                        <label>Parent/Indukan</label>
                        <input type="text" name="parent" value="<?php echo $data['parent']; ?>" autofocus=""
                            required="" />
                    </div>
                    <div>
                        <label>Date of Birth</label>
                        <input type="date" name="dob" value="<?php echo $data['dob']; ?>" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Harga</label>
                        <input type="number" name="harga"value="<?php echo $data['harga']; ?>" autofocus="" min="1">
                    </div>
                    <div>
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" value="Jantan" autofocus="" required="" /> Jantan
                        <input type="radio" name="jenis_kelamin" value="Betina" autofocus="" required="" /> Betina
                    </div>
                    <div>
                        <button type="submit">Simpan Perubahan Gecko</button>
                    </div>
                </section>
            </form>
</body>

</html>