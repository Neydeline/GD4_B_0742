<?php
    session_start();
    if(isset($_POST['submit'])){
        include('../db.php');

        $email = $_POST['email'];
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $job = $_POST['job'];


        $query = mysqli_query($con, "UPDATE users SET email='$email', name='$name', phonenum='$phonenum', job='$job' WHERE id= ". $_SESSION['user']['id']);


        if($query){
            echo
                '<script>
                alert("Profile Berhasil diupdate");
                window.location = "../page/profile.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Profile gagal diupdate");
                </script>';
        }
    }else{
        echo
            '<script>
            window.location = "../page/profile.php"
            </script>';
    }
?>