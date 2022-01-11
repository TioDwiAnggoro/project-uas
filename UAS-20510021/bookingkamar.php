<?php
    include "header.php";
?>
                <main>
                    <?php
                    include "koneksi.php";
                    $qry_get_kamar=mysqli_query($conn,"select * from tb_kamar where kode_kamar = '".$_GET['kode_kamar']."'");
                    $dt_kamar=mysqli_fetch_array($qry_get_kamar);
                    ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Kamar</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                Data Kamar berisikan semua data kamar di hotel kami
                            </div>
                        </div>
                        <form action="prosesbooking.php" method="post">
                            <div style="margin: 1rem 0" class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="kode_kamar" type="text" placeholder="Enter your Kode Kamar" />
                                    <label for="inputLastName">Kode Kamar</label>
                                </div>
                            </div>
                            <div style="margin: 1rem 0" class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="kode_tamu" type="text" placeholder="Enter your Nama Kamar" />
                                    <label for="inputLastName">Kode Tamu</label>
                                </div>
                            </div>
                            <div style="margin: 1rem 0" class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="cek_in" type="text" placeholder="Enter your Deskripsi" />
                                    <label for="inputLastName">Tanggal Check In</label>
                                </div>
                            </div>
                            <div style="margin: 1rem 0" class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="cek_out" type="text" placeholder="Enter your Harga" />
                                    <label for="inputLastName">Tanggal Check Out</label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="login" style="margin-left: 1.5rem" class="btn btn-primary" value="SUBMIT">
                    </form>
                </main>
<?php
    include "footer.php";
?>