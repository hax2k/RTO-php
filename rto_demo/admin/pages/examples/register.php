<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$con = mysqli_connect("localhost", "root", "", "rto");
$q = "INSERT into admin (admin_name,admin_email,admin_password,admin_role) VALUES ('$name','$email','$password','$role')";
$a = mysqli_query($con, $q);
if ($a) {
?>
    <script>
        alert("Success")
    </script>
<?php
    header('Location: http://localhost/rto_demo/admin/');
} else {
?>
    <script>
        alert("Fail")
    </script>
<?php
}
?>