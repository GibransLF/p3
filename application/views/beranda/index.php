<h1>HELLO WORLD!!!</h1>
<br>
<br>
<a href="<?= base_url('beranda/logout') ?>">logout</a>
<br>
<br>
<a href="<?= base_url('profile/index') ?>">go to profile</a>
<br>
<br>
<table border="1px">
  <tr>
    <th>NAMA</th>
    <th>NIM</th>
    <th>USERNAME</th>
    <th>ROLE</th>
    <th>matkul</th>
    <th>file</th>
    <th>ACTION</th>
  </tr>
    <?php 
    foreach($user->result() as $u): ?>
      <tr>
        <td> <?= $u->nama ?> </td>
        <td> <?= $u->ni ?> </td>
        <td> <?=$u->username ?> </td>
        <td> <?= ($u->role == '1') ? "Mahasiswa" : (($u->role == '2') ? "Dosen" : "Admin") ?> </td>
        <td> <?= $u->matkul ?> </td>
        <td> 
          <a href="<?= base_url("downloads/") . $u->file ?>">
          &nbsp; <?=$u->file ?> &nbsp;
          </a>
        </td>
        <td> 
          <a href="<?= base_url('beranda/edit?id=') . $u->id?> "> Ubah </a>
          ||
          <a href="<?= base_url('beranda/delete?id=') . $u->id?>"> Hapus </a>
        </td>
      </tr>
    <?php endforeach ?>
  <tr>
    <th>NAMA</th>
    <th>NIM</th>
    <th>USERNAME</th>
    <th>ROLE</th>
    <th>matkul</th>
    <th>file</th>
    <th>ACTION</th>
  </tr>
</table>
<br>
<a href="<?= base_url('beranda/add') ?>" style="float: right; width: 70%">tambah data +</a>