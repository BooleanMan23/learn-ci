
<button  data-toggle="modal" data-target="#exampleModal">Tambah Data Mahasiswa</button>
<table border="1px solid black">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jurusan</th>
    </tr>

    <?php foreach($mahasiswa as $mahasiswa) : ?>
        <tr>
            <td><?php echo $mahasiswa['mahasiswa_name']?></td>
            <td><?php echo $mahasiswa['mahasiswa_nim']?></td>
            <td><?php echo $mahasiswa['mahasiswa_address']?></td>
            <td><?php echo $mahasiswa['mahasiswa_birthdate']?></td>
            <td><?php echo $mahasiswa['mahasiswa_majors']?></td>
        </tr>
    <?php endforeach;?>
</table>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). '/mahasiswa/add'?>" method = "POST">
            <div class = "form-group">
                <label>Nama</label>
                <input type="text" name="mahasiswa_name" class="form-control">
            </div>
            <div class = "form-group">
                <label>Nim</label>
                <input type="number" name="mahasiswa_nim" class="form-control">
            </div>
            <div class = "form-group">
                <label>Alamat</label>
                <input type="text" name="mahasiswa_address" class="form-control">
            </div>
            <div class = "form-group">
                <label>Tanggal Lahir</label>
                <input type="number" name="mahasiswa_birthdate" class="form-control">
            </div>
            <div class = "form-group">
                <label>Jurusan</label>
                <input type="text" name="mahasiswa_majors" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="input" class="btn btn-primary">Tambah mahasiswa</button>
              </div>
        </form>
      </div>
   
    </div>
  </div>
</div>