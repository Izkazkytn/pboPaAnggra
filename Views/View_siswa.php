<?php 

include '../Controllers/Controller_siswa.php';
 // Membuat Object dari Class pegawai
$siswa = new Controller_siswa();
$Getsiswa = $siswa->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table siswa</h3> <h3><a href="View_post_siswa.php">Add Data</a></h3>


        <table border="1">
            <tr>
                  <th>No</th>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Kompetisi keahlian</th>
                <th>Action</th>
              
            </tr>
            <?php

                // Decision validation variabel
                if(isset($Getsiswa))
                {
                        $no = 1;
                        foreach($Getsiswa as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['nis']; ?></td>
                           
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['alamat']; ?></td>
                            <td><?php echo $Get['no_telp']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td>
                                <!-- <a href="../Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">view</a> -->
                                <!-- <a href="../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>">Delete</a> -->
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>