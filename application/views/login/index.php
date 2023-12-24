<center>
<h1>Login p3</h1>
<form action="<?= base_url("login/cekLogin") ?>" method="post">
    <div>
        <label for="username" >Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <br>
    <button type="submit">login</button>
</form>
</center>