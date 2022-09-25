<?php
    if(isset($_POST['submit'])){
        include('../db.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['tytheigs'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con, "INSERT INTO movies(id, name, genre, realese, season, synopsis)
        VALUES('$id', '$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));

        if($query){
            echo 
                '<script>
                    alert("Movie Berhasil ditambah");
                    window.location = "../page/listMoviesPage.php"
                    </script>';
        }else{
            echo 
                '<script>
                    alert("Gagal Tambah Movie");
                    </script>';
        }
    }else{
        echo 
        '<script>
        window.history.back()
        </script>';
    }
?>
   