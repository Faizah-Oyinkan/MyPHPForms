<?php
include '../dbconnect.php';
if(isset($_POST['action'])){
    if($_POST['action'] == 'group_messages'){

        $statement = "SELECT * from group_messages order by date_sent DESC";

        $query = mysqli_query($conn, $statement);
        
        $output = "";
        
        while($message = mysqli_fetch_assoc($query)) :
        // exit($message['user_id']);
        $statement2 = "SELECT username from users where id = $message[user_id]";
        $query2 = mysqli_query($conn, $statement2);
        $user = mysqli_fetch_object($query2);
        // exit(var_dump($user));
        if($message['user_id'] == $user_id) : 
              $output .= "
              <!-- //My Message -->
             <div class='message my-2 ml-2 mr-2 row justify-content-end'>
                  <div class='card w-75 bg-primary'>
                     <div class='card-header'>You</div>
                     <div class='card-body'>
                          $message[message]
                      </div>
                      <div class='card-footer text-right small'>
              ";
               $output .= gmdate('h:i a', strtotime($message['date_sent']));
            $output .= " </div>
                  </div>
              </div>
            ";
        else : 
          $output .= "
              <!-- //Other User's Messages -->
              <div class='message my-2 ml-2 mr-2 row'>
                  <div class='card w-75 bg-dark'>
                      <div class='card-header'>~$user->username</div>
                      <div class='card-body'>
                          $message[message]
                      </div>
                      <div class='card-footer text-right small'>
                      ";
          $output .= gmdate('h:i a', strtotime($message['date_sent']));
          $output .= " </div>
                  </div>
              </div>
          ";
        endif;
    endwhile;

    echo $output;
}
}
          
    



    













