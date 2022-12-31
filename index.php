<?php require 'layouts/header.php'; ?>

<!-- Section Regist -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form id="quickForm" action="module/add_data.php" method="POST">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" autocomplete="off" name="nama_lengkap" id="nama_lengkap"
                            placeholder="Nama Lengkap">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" autocomplete="off" name="email" id="email"
                                    placeholder="Masukkan Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">No. Handphone</label>
                                <input type="no_hp" class="form-control" autocomplete="off" name="no_hp" id="no_hp"
                                    placeholder="No.Hp/WhatsApp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" autocomplete="off" name="alamat" id="alamat"
                            placeholder="Alamat Lengkap" cols="30"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <textarea class="form-control" autocomplete="off" name="keperluan" id="keperluan"
                            placeholder="Keperluan" cols="30"></textarea>
                    </div>
                    <button type="submit" name="regis" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Section Regist -->

<?php require 'layouts/footer.php'; ?>