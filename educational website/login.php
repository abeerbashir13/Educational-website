<?php
include "templete/header.php";
if (isset($_SESSION['email'])) {
    redirect("index.php");
}
if (isset($_POST) && isset($_POST['send'])) {

    if (

        !empty($_POST['email']) && !empty($_POST['password'])
    ) {
        $sql = "SELECT * FROM user WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['id'] = $row['id'];
                if ($_SESSION['role'] == 1)
                redirect("index.php");
                else 
                redirect("admin/index.php");
            } else {
                echo "Invalid email/password";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All Fields Are Required";
    }
}
?>
<section class="container">

    <div class="formCon">
        <h2>Login</h2>
        <form action="login.php" method="post">
            
            <label for="email">Email</label>
            <input class="formControl" name="email" id="email" placeholder="Email" />
            
            <label for="password">Password</label>
            <input type="password"  name="password"  placeholder="password" />
          
        <button class= "primaryBtn" type="submit">Login</button>
        <a href="register.php">Don't have an acount?</a>
           
        </form>
    </div>

</section>

<?php include "templete/footer.php"; ?>