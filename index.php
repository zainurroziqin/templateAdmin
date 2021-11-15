<?php
    require ('koneksi.php');

    session_start();

    if(isset($_POST['submit'])) {
        $email = $_POST['txt_email'];
        $password = $_POST['txt_password'];

        // $emailCheck = mysqli_real_escape_string($koneksi, $email);
        // $passCheck  = mysqli_real_escape_string($koneksi, $password);

        if(!empty(trim($email)) && !empty(trim($password))) {
            // select data berdasarkan username dari database
            $query  = "SELECT * FROM user_detail WHERE user_email='$email'";
            $result = mysqli_query($koneksi, $query);
            $num    = mysqli_num_rows($result);

            while($row = mysqli_fetch_array($result)) {
                $id         = $row['id'];
                $userVal    = $row['user_email'];
                $passVal    = $row['user_password'];
                $userName   = $row['user_fullname'];
                $level      = $row['level'];
            }

            if($num != 0) {
                if($userVal==$email && $passVal==$password) {
                    // header('Location: home.php?user_fullname=' . urlencode($userName));
                    //Pembuatan session
                    
                    if($level=='1'){
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $userName;
                        $_SESSION['level'] = $level;
                        header ('Location: homeAdmin.php');
                    }else{
                        $_SESSION['id'] = $id;
                        $_SESSION['name'] = $userName;
                        $_SESSION['level'] = $level;
                        header ('Location: homeUser.php');
                    }

                    
                } else {
                    $error = 'user atau password salah!';
                    // header('Location: login.php');
                }
            } else {
                $error = 'user tidak ditemukan!';
                // header('Locatian: login.php');
            }
        } else {
            $error = 'Data tidak boleh kosong!!!';
            echo $error;
        }
    }
?>

<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- <form action="login.php" method="POST">
            <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email"></p>
            <p>password : <input type="password" name="txt_password"></p>
            <button type="submit" name="submit">Sign In</button>
        </form> -->

        <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <label>Email</label><br>
            <input type="text" name="txt_email"><br>
            <label>Password</label><br>
            <input type="password" name="txt_password"><br>
            <button type="submit" name="submit">Log in</button>
        </form>
        <p>Belum punya akun?<a href="register.php">Register</a></p>
    </div>
       
    </body>
</html>

