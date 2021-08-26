<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class pegawai
$kelas = new Controller_kelas();
$Getkelas = $kelas->GetData_Where($_GET['id_kelas']);
?>



<?php
    foreach($Getkelas as $Get){
?>

<form action="../Config/Routes.php?function=put_kelas" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
      
    <tr>
        <td>id kelas</td>
        <td><input type="text" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>"></td>
    </tr>
  
    <tr>
        <td>nama kelas </td>
        <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>">
    </tr>
    

    <tr>
        <td>kompetensi_keahlian </td>
        <td><input type="text" name="kompetensi_keahlian" value="<?php echo $Get['kompetensi_keahlian']; ?>">
    </tr>
    
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table
</form>

<?php
    }
?>