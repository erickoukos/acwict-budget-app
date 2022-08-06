<?php     
    session_start();
    session_destroy();
      
    header("Location: http://localhost/acwict-budget-app/index.php")
;?>