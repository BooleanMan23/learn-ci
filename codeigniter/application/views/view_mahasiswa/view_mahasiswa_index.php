
<button  data-toggle="modal" data-target="#exampleModal">Tambah Data Mahasiswa</button>
<table border="1px solid black">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $row['mahasiswa_name']?></td>
            <td><?php echo $row['mahasiswa_nim']?></td>
            <td><?php echo $row['mahasiswa_address']?></td>
            <td><?php echo $row['mahasiswa_birthdate']?></td>
            <td><?php echo $row['mahasiswa_majors']?></td>
            <form  action="<?php echo base_url(). '/mahasiswa/delete/' . $row['mahasiswa_id']  ?>" method = "POST">
                 <td><button type = "submit" onclick = "javascript: return confirm('apakah anada yakin ingin')" a class = "btn btn-danger btn-sm"><i class = "fa fa-trash"></i></button></td>
            </form>
            <form action="<?php echo base_url(). '/mahasiswa/edit/' . $row['mahasiswa_id']  ?>">
                   <td><button class = "btn btn-primary btn-sm"><i class = "fa fa-edit"></i></button></td>
            </form>
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