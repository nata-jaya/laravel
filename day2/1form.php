<form method="POST" enctype="multipart/form-data">
    Nama : <input type="text" name="nama"> <br/>
    Email :<input type="text" name="email"><br/>
    Telp : <input type="text" name="telp"><br/>
    Photo :<input type="file" name="photo"><br/>
    Dokumen :<input type="file" name="dokumen"><br/>
<button name="submit">submit</button> 
</form>

<?php
if (!empty($_POST['nama']))
{
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $namaFilePhoto = $_FILES['photo']['name'];
    $namaFileDokumen = $_FILES['dokumen']['name'];

    if (isset($namaFilePhoto)){
        move_uploaded_file(
            $_FILES['photo']['tmp_name'], 
            'uploads/' .time().$_FILES['photo']['name']
          );
          
    }

    if (isset($namaFileDokumen)){
        move_uploaded_file(
            $_FILES['dokumen']['tmp_name'], 
            'uploads/' .time().$_FILES['dokumen']['name']
          );
          
    }
    $row = "$nama;$email;$telp;$namaFilePhoto;$namaFileDokumen \n";
    file_put_contents('./form_registrasi.csv', $row,FILE_APPEND);
    echo "data udah simpan";
}
?>