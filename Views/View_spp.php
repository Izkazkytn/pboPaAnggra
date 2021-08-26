<?php 

include '../Controllers/Controller_spp.php';
 // Membuat Object dari Class pegawai
$spp = new Controller_spp();
$Getspp = $spp->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table Pegawai</h3> <h3><a href="View_post_kelas.php">Add Data</a></h3>


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
                if(isset($Getspp))
                {
                        $no = 1;
                        foreach($Getspp as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['tahun']; ?></td>
                           
                            <td><?php echo $Get['nominal']; ?></td>
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