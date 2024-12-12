<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id            = $_POST['id'];
  $gambar_gecko  = $_FILES['gambar_gecko']['name'];
  $morph         = $_POST['morph'];
  $parent        = $_POST['parent'];
  $dob           = $_POST['dob'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $harga         = $_POST['harga'];

  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar_gecko != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_gecko); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_gecko']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_gecko; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file foto ke folder gambar
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE gecko SET gambar_gecko = '$nama_gambar_baru', morph = '$morph', parent = '$parent', dob = '$dob', jenis_kelamin = '$jenis_kelamin', harga = '$harga'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg, png dan jpeg maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='front-form_create.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID gecko kita edit
      $query  = "UPDATE gecko SET morph = '$morph', parent = '$parent', dob = '$dob', jenis_kelamin = '$jenis_kelamin', harga = '$harga'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }