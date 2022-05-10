<?php include './components/header.php'; ?> 


<?php
?>


 <div class="row justify-content-center">
         <div class="col-sm-4">
  <?php
         if(isset($_GET['username'])){
            echo $_GET['username'];
        };
        // if(isset($_POST['username'])){
        //     echo $_POST['username'];
        // };
?> 
             <form action="core/forms/register.php" method="POST">
             <div class="card">
             <div class="card-header bg-primary text-white font-weight-bold">
                Register
            </div>
            <div class="card-body">
            <div class="form group">
                <label>Username</label>
                <input type="text" class="form-control" name="username"  required>
            </div>
             <div class="form-group">
                        <label>Email</label>
                        <input type="email.." class="form-control" name="email" required>
                    </div>
              <div class="form-group">
                   <label>Password</label>
                   <input type="password" class="form-control" name="password"  required>
             </div>
             <div class="form-group">
                <label>Confirm password</label>
                <input type="password" class="form-control" name="confirm password" required>
            </div>


            <div class="card-footer">
                <input type="submit" name="submit_button" value="Register" class="btn btn-primary w-100 btn-sm">
            </div>
        </div>
        </form>

    </div>
</div>



<?php include './components/footer.php'; ?>
