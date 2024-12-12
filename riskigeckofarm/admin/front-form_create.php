<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
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
        <h1>Tambah Gecko Baru</h1>
        <center>
            <form method="POST" action="back-create.php" enctype="multipart/form-data">
                <section class="base">
                    <div>
                        <label>Foto</label>
                        <input type="file" name="gambar_gecko" required="" />
                    </div>
                    <div>
                        <label>Morph</label>
                        <input type="text" name="morph" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Parent/Indukan</label>
                        <input type="text" name="parent" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Date of Birth</label>
                        <input type="date" name="dob" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Harga</label>
                        <input type="number" name="harga" min="1">
                    </div>
                    <div>
                        <label>Jenis Kelamin</label>
                        <input type="radio" name="jenis_kelamin" value="Jantan" autofocus="" required="" /> Jantan
                        <input type="radio" name="jenis_kelamin" value="Betina" autofocus="" required="" /> Betina
                    </div>
                    <div>
                        <button type="submit" name="simpan">Simpan Gecko Baru</button>
                    </div>
                </section>
            </form>
</body>

</html>
