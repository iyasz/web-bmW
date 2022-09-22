<?php

if (isset($_POST['post_login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $userCheck = $conn->query("SELECT * FROM siswa WHERE username = '$username'");
    $passCheck = $conn->query("SELECT * FROM siswa WHERE password = '$password'");

    if (mysqli_num_rows($userCheck) < 1) {
        $alert = "Username Anda Belum Terdaftar!";
    } else {
        if (mysqli_num_rows($passCheck) < 0) {
            $alert = "Password Anda Salah!";
        } else {
            header('location : kanjut.php');
        }
    }
}


?>


<div class="bc-200">
    <div class="container position-relative  pr">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-header text-center py-4 position-relative  bc-100">
                        <h5>Daring BM3 · Online Learning</h5>
                        <P>Learning starts at 08:00 - 17:00 AM</P>
                        <a class="bg-white pl " href=""><img width="55px" src="<?= base_url() ?>asset/img/logo/logobmw.gif" alt=""></a>
                    </div>
                    <div class="card-body ">
                        <form action="" method="post">
                            <div class="mb-3 mt-5 hp">
                                <label for="user">Username</label>
                                <input type="text" name="username" id="user" autocomplete="off" class="form-control">
                                <p></p>
                            </div>
                            <div class="mb-3 hp">
                                <label for="pw">Password</label>
                                <input type="password" name="password" id="pw" class="form-control" autocomplete="off">
                                <p></p>
                            </div>
                            <div class="footer text-center mt-5 mb-4">
                                <button class="btn btn-primary" name="post_login">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>