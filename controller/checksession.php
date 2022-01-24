<?php
$minutesBeforeSessionExpire=1;
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*5))) {
    session_unset();     // unset $_SESSION   
    session_destroy();   // destroy session data  
}
