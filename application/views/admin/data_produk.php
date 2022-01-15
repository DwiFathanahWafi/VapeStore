<div class="container-fluid">
    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambah">Tambah Produk </button>
    <table class="table table-bordered mt-3">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>

            <th colspan="2">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($produk as $mn) : ?>
            <tr>
                <td class="text-center"><?= $no++ ?></td>
                <td><?= $mn->nama_produk ?></td>
                <td><?= $mn->des ?></td>
                <td class="text-center"><?= $mn->harga ?></td>
                <td class="text-center"><?= $mn->stok ?></td>
                <td class="text-center"><?= $mn->kat ?></td>
                <td><?= anchor('admin/Data_produk/edit/' . $mn->id, '<div class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i></div>') ?></td>
                <td><?= anchor('admin/Data_produk/hapus/' . $mn->id, '<div class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/Data_produk/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="des" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kat">
                            <option>Atomizer</option>
                            <option>Battery</option>
                            <option>Coil</option>
                            <option>Cotton</option>
                            <option>Devices</option>
                            <option>Liquid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="File" name="gambar" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->