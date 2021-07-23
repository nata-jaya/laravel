<form method="POST" enctype="multipart/form-data">
    Nama : <input type="text" name="nama"> <br/>
    Email :<input type="text" name="email"><br/>
    Telp : <input type="text" name="telp"><br/>
    Photo :<input type="file" name="photo"><br/>
    Dokumen :<input type="file" name="dokumen"><br/>
<button type="submit"name="submit">Submit</button>
</form>

<?php
if (isset($POST['submit']))
{
    echo "hi";
}
?>