<div class = "content-wrapper">
    <section class = "content">
        <h4><strong>Detail Data Mahasiswa</strong></h4>
        <table class = "table">
            <tr>
                <th>Foto Mahasiswa</th>
                <td><?php echo $detailMahasiswa->mahasiswa_photo?></td>
               
                <img src="<?php echo $detailMahasiswa->mahasiswa_photo; ?>">
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detailMahasiswa->mahasiswa_name?></td>
            </tr>
            <tr>
                <th>NIM</th>
                <td><?php echo $detailMahasiswa->mahasiswa_nim?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detailMahasiswa->mahasiswa_birthdate?></td>
            </tr>
            <tr>
                <th>Majors</th>
                <td><?php echo $detailMahasiswa->mahasiswa_majors?></td>
            </tr>
        </table>
    </section>

</div>