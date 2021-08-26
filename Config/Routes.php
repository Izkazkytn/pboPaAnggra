<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_Pegawai.php';
include '../Controllers/Controller_kelas.php';

include '../Controllers/Controller_spp.php';
include '../Controllers/Controller_siswa.php';


 // Membuat Object dari Class pegawai
 
 
 // Membuat variabel dari Get URL
 $function = $_GET['function'];
 
 // Decision variabel create
 if($function == "create"){
     
     $db = new Controller_pegawai();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['nip'],
            $_POST['nama'],
            $_POST['jns_kel'],
            $_POST['tgl_lahir'],
            $_POST['status'],
            $_POST['mulai_kerja']
        );
    }
    header("location:../Views/View_pegawai.php");
}
// Decision variabel put
elseif($function == "put"){

    $db = new Controller_pegawai();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['nip'],
            $_POST['nama'],
            $_POST['jns_kel'],
            $_POST['tgl_lahir'],
            $_POST['status'],
            $_POST['mulai_kerja']
        );   
    }
    header("location:../Views/View_pegawai.php");
}
// Decision variabel delete
elseif($function == "delete"){
    
    $db = new Controller_pegawai();
    $db->DELETEData($_GET['nip']);
    header("location:../Views/View_pegawai.php");
}






// Decision variabel create
if($function == "create_kelas"){

    $db = new Controller_kelas();

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetisi_keahlian'],
         
        );
    }
    header("location:../Views/View_kelas.php");


}
// Decision variabel put
elseif($function == "put_kelas"){

$db = new Controller_kelas();
    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian'],
         
        );   
    }
    header("location:../Views/View_kelas.php");

}
// Decision variabel delete
elseif($function == "delete_kelas"){
   $db = new Controller_kelas();
   $db->DELETEData($_GET['id_kelas']);
   header("location:../Views/View_kelas.php");
}


 // Decision variabel create
 if($function == "create_siswa"){
     
    $db = new Controller_siswa();
   // Validasi Token CSRF

   
   if(validation()==true)
   {
       $db->POSTData(
           $_POST['nisn'],
           $_POST['nis'],
           $_POST['nama'],
           $_POST['id_kelas'],
           $_POST['alamat'],
           $_POST['no_telp'],
           $_POST['id_spp'],
       );
   }
   header("location:../Views/View_siswa.php");
}


?>