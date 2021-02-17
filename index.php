<?php // Example 27-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to My Social Network, that has tons of features!";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
  </body>
</html>
_END;
?>
