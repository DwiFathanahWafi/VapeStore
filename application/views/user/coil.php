<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row text-center  mt-3">
        <?php
        $diskon = 0;
        foreach ($coil as $mn) :
            $diskon = 0.8 * $mn->harga;
        ?>

            <div class="card ml-4 mb-4" style="width: 18rem;">
                <img src="<?= base_url('assets/img/') . $mn->gambar ?>" class="card-img-top" style="height: 18rem;" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-3 "><strong><?= $mn->nama_produk ?></strong></h5>

                    <span class="badge badge-pill badge-info mb-3">Rp. <?= number_format($diskon, 0, ',', '.') ?></span>
                    <span class="badge badge-pill badge-danger mb-3"><del>Rp. <?= number_format($mn->harga, 0, ',', '.') ?></del></span>
                    <br>
                    <?= anchor('user/detail/' . $mn->id, '<i class="fas fa-eye" style="color: grey"></i>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>