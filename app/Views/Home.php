<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#add">
    Tambah Data
</button>
<?php
if (session()->getFlashData('alert')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('alert') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Stock</th>
            <th scope="col">Harga Produk</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_produk as $dp) : ?>
            <tr>
                <td> <?= $dp['id']; ?> </td>
                <td> <?= $dp['nama_produk']; ?> </td>
                <td> <?= $dp['stock']; ?> </td>
                <td> Rp <?= number_format($dp['harga_produk'], 2, ',', '.'); ?> </td>
                <td>
                    <button class="btn btn-warning btn-sm btn-delete" data-bs-toggle="modal" data-bs-target="#edit<?= $dp['id']; ?>">Edit</button>

                    <form action="/Home/delete/<?= $dp['id']; ?>" method="post" class="d-inline">
                        <button class="btn btn-danger btn-sm btn-delete">Delete</button>
                    </form>
                </td>
            </tr>

            <!-- modal edit -->
            <form action="/Home/edit/<?= $dp['id']; ?>" method="post">
                <div class="modal fade" id="edit<?= $dp['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="id_produk" class="form-label">ID Produk</label>
                                    <input disabled type="text" class="form-control" id="id_produk" name="id_produk" value="<?= $dp['id']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $dp['nama_produk']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="text" class="form-control" id="stock" name="stock" value="<?= $dp['stock']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="harga_produk" class="form-label">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga_produk" name="harga_produk" value="<?= $dp['harga_produk']; ?>">
                                </div>
                                <button type="submit" class="btn btn-warning d-flex ms-auto">Ubah</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php endforeach ?>
    </tbody>
</table>

<!-- Modal Add-->
<form action="/Home/save" method="post">
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" id="harga_produk" name="harga_produk">
                    </div>
                    <button type="submit" class="btn btn-primary d-flex ms-auto">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal delet-->
<form action="/Home/delete" method="post">
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" id="harga_produk" name="harga_produk">
                    </div>
                    <button type="submit" class="btn btn-primary d-flex ms-auto">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>



<?= $this->endSection() ?>