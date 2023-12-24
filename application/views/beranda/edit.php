<form action="<?= base_url('beranda/update') ?>" method="post">
<div style="margin: 10px 40px;">
    <div>
        <label for="ni">NIM</label>
        <input type="number" id="ni" name="ni" value="<?= $user["ni"] ?>" required>
    </div>
    <div>
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user["nama"] ?>" required>
    </div>
    <div>
        <label for="username" >Username</label>
        <input type="text" id="username" name="username" value="<?= $user["username"] ?>" required>
    </div>
    <div>
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= $user["password"] ?>" required>
    </div>
    <select class="form-select" name="role" required>
        <option selected 10px value="<?= $user["role"] ?>">
            <?php
            if ($user["role"] == "1") {
                echo "Mahasiswa";
            }
            elseif($user["role"] == "2") {
                echo "Dosen";
            }
            else{
                echo "Admin";
            }

            ?>
        </option>
        <option value="1">Mahasiswa</option>
        <option value="2">Dosen</option>
        <option value="3">Admiin</option>
    </select>

    <input type="hidden" name="id" value="<?= $user["id"] ?>">
    <div class="d-flex justify-content-between" style="margin: 10px 40px;">
        <a href="<?= base_url('beranda/index') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</div>
</form>
<!-- end content -->