<?php

require_once "../scripts/view.php";

$inline_javascript = <<<EOD
    $(document).ready(function() {
      $("#signup_form").validate({
        rules: {
          password: {
            minlength: 6
          },
          confirm_password: {
            minlength: 6,
            equalTo: "#password"
          }
        },
        messages: {
          password: {
            minlength: "Passwords must be at least 6 characters"
          },
          confirm_password: {
            minlength: "Passwords must be at least 6 characters",
            equalTo: "Your passwords do not match."
          }
        }
      });
    });
EOD;

page_start("User Signup", $inline_javascript);
?>

  <div id="content">
    <h1>Join the Missing Manual (Digital) Social Club</h1>
    <p>Please enter your online connections below:</p>
    <form id="signup_form" action="create_user.php" 
          method="POST" enctype="multipart/form-data">
      <fieldset>
        <label for="first_name">First Name:</label> 
        <input type="text" name="first_name" size="20" class="required" /><br />
        <label for="last_name">Last Name:</label> 
        <input type="text" name="last_name" size="20" class="required" /><br />
        <label for="username">Username:</label> 
        <input type="text" name="username" size="20" class="required" /><br />
        <label for="password">Password:</label> 
        <input type="password" id="password" name="password" 
               size="20" class="required password" />
        <div class="password-meter">
          <div class="password-meter-message"> </div>
          <div class="password-meter-bg">
            <div class="password-meter-bar"></div>
          </div>
        </div>
        <br />
        <label for="confirm_password">Confirm Password:</label> 
        <input type="password" id="confirm_password" name="confirm_password" 
               size="20" class="required" /><br />
        <label for="email">E-Mail Address:</label> 
        <input type="text" name="email" size="30" class="required email" /><br />
        <label for="facebook_url">Facebook URL:</label> 
        <input type="text" name="facebook_url" size="50" class="url" /><br />
        <label for="twitter_handle">Twitter Handle:</label> 
        <input type="text" name="twitter_handle" size="20" /><br />
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <label for="user_pic">Upload a picture:</label> 
        <input type="file" name="user_pic" size="30" /><br />
        <label for="bio">Bio:</label> 
        <textarea name="bio" cols="40" rows="10"></textarea>
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Join the Club" />
        <input type="reset" value="Clear and Restart" />
      </fieldset>
    </form>
  </div>

  <div id="footer"></div>
 </body>
</html>
