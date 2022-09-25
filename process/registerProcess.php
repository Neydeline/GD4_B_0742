<?php
    if(isset($_POST['register'])){
        include('../db.php');

        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $job = $_POST['job'];
        $membership = $_POST['membership'];

        $queryemail = mysqli_query($con, "SELECT email FROM users WHERE email ='$email'");
        $result = mysqli_num_rows($queryemail);
        if($result>0){
            echo 
                "<script>
                    alert('Email harus unik');
                    window.location = '../page/registerPage.php'
                </script>";
        }else if ($queryphone = mysqli_query($con, "SELECT phonenum FROM users WHERE phonenum ='$phonenum'"));
                    $data = mysqli_num_rows($queryphone);
                if($data>0){
                    echo
                        "<script>
                        alert('Nomor Telepon harus unik');
                        window.location = '../page/registerPage.php'
                        </script>";
                }else if
                    ($query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership, job)
                    VALUES('$email', '$password', '$name', '$phonenum', '$membership', '$job')") or die(mysqli_error($con)));

                        if($query) {
                            echo
                            '<script>
                            alert("Register Success"); 
                            window.location = "../index.php"
                            </script>';
                        } else {
                            echo
                            '<script>
                            alert("Register Failed");
                            </script>';
                        }
                }else{
                    echo
                        '<script>
                        window.history.back()
                        </script>';
                }
?>