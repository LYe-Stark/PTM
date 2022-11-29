<?php
   $input = array("../chat.php","../cherdegay.php", "../kaeloo.php","../moignon.php","../eugli.php","../kouin.php","../mouton.php","../olaf.php","../olga.php","../pretty.php","../ursulla.php");
   $rand_keys = array_rand($input, 1);
   $rand_key = $input[$rand_keys];
   if (isset($rand_key)){
   header("location:$input[$rand_keys]");
   }
   