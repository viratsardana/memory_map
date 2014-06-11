<?php
       session_start();
       
       $placename=$_SESSION['placename'];
       $userid=$_SESSION['userid'];
       
       mkdir("uploads/".$userid."/".$placename,0700,true);
       
       $path="uploads/".$userid."/".$placename."/";


?>