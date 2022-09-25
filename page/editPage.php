<?php
    include '../component/sidebar.php';

    $query = mysqli_query($con, 'SELECT * FROM users
            WHERE id = '. $_SESSION["user"]["id"]);
    $user = mysqli_fetch_assoc($query);
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT PROFILE</h4>
    </div>
    <hr>
    <div class="card-body">
    <form action="../process/editProfile.php" method="POST">
    <div class="form-group row" >
      <label class="col-8">
          Name
      </label>
      <div class="col-9">
          <input type="text" name="name" class="form-control" value="<?php echo $user['name']?>">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Phone Number
      </label>
      <div class="col-9">
          <input type="text" name="phonenum" class="form-control" value="<?php echo $user['phonenum']?>">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Email
      </label>
      <div class="col-9">
          <input type="text" name="email" class="form-control" value="<?php echo $user['email']?>">
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Job
      </label>
      <div class="col-9">
         <select required name="job" class="form-control" aria-label="Default select" id="job" value="<?php echo $user['job']?>">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Staff">Staff</option>
         </select>
       </div>
    </div> <br>

    <div class="form-group row">
      <label class="col-8">
          Membership
      </label>
      <div class="col-9">
      <select name="membership" class="form-control" aria-label="Default select" id="membership" value="<?php echo $user['membership']?>" disabled>
            <option value="Reguler">Reguler</option>
            <option value="Platinum">Platinum</option>
            <option value="Gold">Gold</option>
      </select>
       </div>
    </div> <br>

    <div class="form-group row">
        <div class="col-8 text-left">
            <button type="submit" class="btn btn-success" name="submit">Save</button>
        </div>
    </div>
    </form>
    </div>
</div>
</aside>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>