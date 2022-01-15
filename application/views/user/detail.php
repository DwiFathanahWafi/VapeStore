<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="card">
        <h5 class="card-header "><strong> Detail Produk</strong></h5>
        <div class="card-body">
            <?php
            $diskon = 0;
            foreach ($produk as $mn) :
                $diskon = 0.8 * $mn->harga;
            ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() . '/assets/img/' . $mn->gambar ?>" class="card-img-top" style="height: 19srem;" alt="">
                    </div>
                    <div class="col-md-8">
                        <table class="table mt-3">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?= $mn->nama_produk ?></strong></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><strong><?= $mn->des ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?= $mn->kat ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?= $mn->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td> <strong>
                                        <div class="btn btn-sm btn-info">Rp. <?= number_format($diskon, 0, ',', '.')  ?></div>
                                    </strong>
                                    <strong>
                                        <div class="btn btn-sm btn-danger"><del>Rp. <?= number_format($mn->harga, 0, ',', '.')  ?></del></div>
                                    </strong>
                                </td>
                            </tr>


                        </table>
                        <?= anchor('user/produk', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>