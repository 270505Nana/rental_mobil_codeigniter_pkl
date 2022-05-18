<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Update Data Tipe Mobil</h1>
        </div>
    </section>

    <?php foreach($tipe as $tp):?>
    <form  method="POST" action="<?php echo base_url('admin/data_tipe/update_tipe_aksi_nana')?>">
        <div class="form-group">
            <label>Kode Tipe</label>
            <input type="hidden" name="id_tipe" value="<?= $tp->id_tipe?>">
            <input type="text" name="kode_tipe" class="form-control" value="<?php echo $tp->kode_tipe?>">
            <?php echo form_error('kode_tipe','<div class="text-small text-danger">','</div>')?> 
        </div>
        <div class="form-group">
            <label>Nama Tipe</label>
            <input type="text" name="nama_tipe" class="form-control" value="<?php echo $tp->nama_tipe?>">
            <?php echo form_error('nama_tipe','<div class="text-small text-danger">','</div>')?> 
        </div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
    </form>
    <?php endforeach;?>
</div>
