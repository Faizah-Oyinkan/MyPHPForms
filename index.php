<?php include './components/header.php'; ?>
     
       <div class="row justify-content-center">
       <?=$_SESSION['user_id'] ?? ''?>
           <div class="col-sm-4">
               <form action="core/forms/login.php" method="POST">
           <div class="card">
            <div class=" card-header bg-info text-white text-block font-weight-bold "
            >Login</div>

            <div class="card-body">
                <div class="form group">
                <label>Username</label>
                <input type="text" class="form-control  mt-1  mb-2" name="email">
                </div>
                
          
            <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control mt-1  mb-2" name="password">
            </div>
         <div class="card-footer">
                <input type="submit" value="Login" name="login_button" class="btn btn-info w-100 pt-3 mt-1  btn-lg">
            </div>

         </div>
        </form>
     </div>
    </div>

<?php include './components/footer.php'; ?>
 
<script>
    $(function(){

        $('#loginForm').submit(function(event){
            event.preventDefault();
            // console.log($(this).serialize());
            // return;


            // const username = $("#username").val();
            // const password = $("#password").val();

            $.ajax({
                url:'core/forms/login.php',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend: function(){
                    $('#loginButton').attr('disabled', 'disabled');
                    $('#loginButton').val('Please wait . . .');
                },
                success: function(data){
                    $('#loginButton').attr('disabled', false);
                    $('#loginButton').val('Login');

                    if(data.status){
                        alert(data.message);
                        window.location = 'dashboard.php';
                    }else{
                        alert(data.message);
                    }
                },
                error: function(jqXHR, status, error){
                    console.log(error);
                }
            })
        })
    })
</script>   