<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');


  include '../Config/Database.php';
  $db = new Database();
  $con = $db->Connect();

  function getData($query)
  {
    global $con;
      
    $result = mysqli_query($con, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
  }


  $dataKelas = getData("SELECT * FROM kelas");
 
  $dataSpp = getData("SELECT * FROM spp");



?>

<form action="../Config/Routes.php?function=create_siswa" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
<tr>
        <td>nisn</td>
        <td><input type="text" name="nisn"></td>
    </tr>   
<tr>
        <td>nis</td>
        <td><input type="text" name="nis"></td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Kelas</td>

    <td>
    <select name="id_kelas" id="">
            <?php foreach ($dataKelas as $key => $value) {
                
            ?>
                
                <option value="<?= $value['id_kelas'] ?>"><?= $value['nama_kelas'] ?></option>

            <?php } ?>
    </select>
    </td>
    </tr>
    
    <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>no_telp</td>
        <td><input type="text" name="no_telp"></td>
    </tr>
    <tr>
     


    <tr>
    <td>SPP</td>

    <td>
    <select name="id_spp" id="">
            <?php foreach ($dataSpp as $key => $value) {
                
            ?>
                
                <option value="<?= $value['id_spp'] ?>"><?= $value['nominal'] ?></option>

            <?php } ?>
    </select>
    </td>
    </tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>


