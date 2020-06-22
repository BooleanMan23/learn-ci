<div class="content-wrapper">
    <section class = "content">
        <?php foreach($mahasiswa as $mhs) { ?>
            <form action="<?php echo base_url(). 'mahasiswa/update';?>" method = "POST">
                <div class = "form-group">
                    <label>Nama</label>
                    <input type="hidden" name="mahasiswa_id" class="form-control" value = "<?php echo $mhs->mahasiswa_id?>">
                    <input type="text" name="mahasiswa_name" class="form-control" value = "<?php echo $mhs->mahasiswa_name?>">
                </div>
                <div class = "form-group">
                    <label>Nim</label>
                    <input type="number" name="mahasiswa_nim" class="form-control"  value = "<?php echo $mhs->mahasiswa_nim?>">
                </div>
                <div class = "form-group">
                    <label>Alamat</label>
                    <input type="text" name="mahasiswa_address" class="form-control"  value = "<?php echo $mhs->mahasiswa_address?>">
                </div>
                <div class = "form-group">
                    <label>Tanggal Lahir</label>
                    <input type="number" name="mahasiswa_birthdate" class="form-control" value = "<?php echo $mhs->mahasiswa_birthdate?>">
                </div>
                <div class = "form-group">
                    <label>Jurusan</label>
                    <input type="text" name="mahasiswa_majors" class="form-control" value = "<?php echo $mhs->mahasiswa_majors?>">
                </div>
                <button type = "reset" class = "btn btn-danger">Reset</button>
                <button type = "submit" class = "btn btn-primary">Edit</button>
            </form>
        <?php } ?>
    </section>
</div>