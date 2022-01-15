<div class="container-fluid">

    <h3><i class="fas fa-edit"></i>Edit Data Produk</h3>
    <?php foreach ($produk as $mn) : ?>
        <form method="post" action="<?= base_url('admin/data_produk/update'); ?>">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $mn->nama_produk ?>">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="hidden" name="id" class="form-control" value="<?= $mn->id ?>">
                <input type="text" name="des" class="form-control" value="<?= $mn->des ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $mn->harga ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kat" class="form-control" value="<?= $mn->kat ?>">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?= $mn->stok ?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3">Save</button>
        </form>

    <?php endforeach; ?>

</div>