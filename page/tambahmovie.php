<?php
    include '../component/sidebar.php'
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>TAMBAH MOVIE</h4>
        <a href="../page/listMoviesPage.php"> <i class="fa fa-reply" style="font-size:25px;color:red; margin-top:2px;"></i></a>
    </div>
    <hr>
    
    <form action="../process/tambahMProcess.php" method="post">
    <div class="form-group row">
      <label class="col-8">
          Name
      </label>
      <div class="col-9">
          <input type="text" name="name" class="form-control">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Genre
      </label>
      <div class="col-9">
         <select required name="tytheigs" class="form-control">
            <option value="action">Action</option>
            <option value="comedy">Comedy</option>
            <option value="romance">Romance</option>
         </select>
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Realese
      </label>
      <div class="col-9">
          <input type="text" name="realese" class="form-control">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Season
      </label>
      <div class="col-9">
          <input type="text" name="season" class="form-control">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Synopsis
      </label>
      <div class="col-9">
        <textarea type="text" name="synopsis" class="form-control"></textarea>
       </div>
    </div> <br>

    <div class="form-group row">
            <div class="col-8 text-left">
              <button type="submit" class="btn btn-success" name="submit">Tambah</button>
            </div>
    </div>
    </form>
</div>
</aside>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>