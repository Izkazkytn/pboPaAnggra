<?php

// Class siswa (CRUD siswa)
class Controller_spp{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;






     var $MSpp;

     var $id_spp;
     var $tahun;
     var $nominal;

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module siswa
            include '../Models/Model_spp.php';
            $this->MSpp = new Model_spp();
        }

    // Method untuk memasukan data ke dalam table
    function POSTData ($tahun,$nominal){
        // perintah POST data
        $this->MKelas->POST($id_kelas,$nama_kelas,$kompetensi_keahlian);

        
    }

    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        // return $this->MSiswa->GET();
        return $this->MSpp->GET();
        
    }
   

    //Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_kelas){

        // perintah GET data
        return $this->MKelas->GET_Where($id_kelas);
    }

    // Method untuk memasukan data ke dalam table
    function PUTData ($id_kelas,$nama_kelas,$kompetensi_keahlian){

        // perintah PUT data
        $this->MKelas->PUT($id_kelas,$nama_kelas,$kompetensi_keahlian);

    }

    // Method untuk menghapus data dari table
    function DELETEData ($id_kelas){

        // perintah DELETE data
        $this->MKelas->DELETE($id_kelas);

    }


 


}


?>