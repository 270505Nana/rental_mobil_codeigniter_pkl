<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Tambah Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?= base_url('admin/data_mobil/tambah_mobil_aksi_nana')?>" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="">Tipe Mobil</label>
                                <select name="kode_type" id="" class="form-control">
                                    <option value="">---Pilih Tipe Mobil---</option>
                                    <?php foreach ($tipe as $tp) : ?>
                                        <option value="<?= $tp->kode_tipe?>"><?= $tp->nama_tipe?></option>
                                    <?php endforeach;?>
                                </select>

                                <?= form_error('kode_type','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                            </div>

                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control">

                                <?= form_error('merk','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                            </div>
                            
                            <div class="form-group">
                                <label for="">No.Plat</label>
                                <input type="text" name="no_plat" class="form-control">

                                <?= form_error('no_plat','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                            </div>

                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control">

                                <?= form_error('warna','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="">Tahun</label>
                                    <input type="number" name="tahun" class="form-control">

                                    <?= form_error('tahun','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">---Pilih Status---</option>
                                        <option value="1">Tersedia</option>
                                        <option value="0">Tidak Tersedia</option>
                                    </select>

                                    <?= form_error('status','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" name="gambar" class="form-control">

                                </div>

                                <center>
                                    <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
                                    <button type="reset" class="btn btn-danger mt-4 ml-5">RESET</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>