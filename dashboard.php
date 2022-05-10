<?php
$page = 'dashbaord';
include './components/users/header.php';
if(isset($_POST['sendMessage'])){
    $message = validateInput($_POST['messages']);
    
    // $statement = "INSERT into group_messages (`message`, `user_id`) values ($message, $user_id)";
    $statement = "INSERT into group_messages set `message` = '$message', `user_id` = $user_id";
    // exit($statement);
    $query = mysqli_query($conn, $statement);

    if(!$query) returnWithNavigation("Unable to send message", './');

    returnNavigationOnly('./');
}


?>
<style>
    .messages{
      max-height: 700px;
      height: 700px;
      overflow-y: scroll;
    }
    textarea{
        resize: none;
    }
    
    @media(max-width: 990px){
        .messages{
            max-height: 360px;
            height: 360px;
            overflow-y: scroll;
        }
    }
    </style>
    
    <div class="container mt-4">
            
 

                    
              

    <div class="card">
        <div class="card-body">
            <div class="messages p-2 text-white">
                <!-- Messages here -->
            </div>
        </div>
        <div class="card-footer">
            <form method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-10">
                            <textarea name="message" rows="2" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="sendMessage" class="btn w-100 btn-outline-primary">
                                <i class="fas fa-paper-plane"></i> <br> Send
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>















<?php
include './components/users/footer.php';
?>


<script>
    $(function(){
    
        setInterval(() => {
            fetchMessages();
        }, 5 * 1000);

        const fetchMessages = () => {
            $.ajax({
               url: 'core/forms/fetchMessages.php',
               method: 'POST',
               data: {action: 'group_messages'},
               success: function(data){
                //    console.log(data);
                    $('.messages').html(data);
               }
            });
        }

        fetchMessages();
    });
</script>