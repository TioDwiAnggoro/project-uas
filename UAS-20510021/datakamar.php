<?php
    include "header.php";
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Kamar</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                Data kamar berisikan semua data kamar yang tersedia di hotel kami
                            </div>
                        </div>
                        <a href="tambahkamar.php" style="margin-bottom: 1rem" class="btn btn-primary">+ Tambah Kamar</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kamar
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode Kamar</th>
                                            <th>Nama Kamar</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "koneksi.php";
                                            $qry_kamar = mysqli_query($conn, "select * from tb_kamar"); 
                                            while ($dt_kamar=mysqli_fetch_array($qry_kamar)){
                                        ?>
                                        <tr>
                                            <td><?=$dt_kamar['kode_kamar']?></td>
                                            <td><?=$dt_kamar['nama_kamar']?></td>
                                            <td><?=$dt_kamar['deskripsi']?></td>
                                            <td><?=$dt_kamar['harga']?>
                                            <td>
                                                <a href="bookingkamar.php?kode_kamar=<?=$dt_kamar['kode_kamar']?>" class="btn btn-primary">Booking</a> |
                                                <a href="editkamar.php?kode_kamar=<?=$dt_kamar['kode_kamar']?>" class="btn btn-success">Edit</a> | 
                                                <a href="hapuskamar.php?kode_kamar=<?=$dt_kamar['kode_kamar']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a> 
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
    include "footer.php";
?>