<?php

class User
{
     public function wakeup()
     {
         echo "Wake Up Bro \n";
         return $this;
     }
     public function brush()
     {
         echo "Brush \n";
         return $this;
     }
     public function goodnight()
     {
         echo "Good Night \n";
         return $this;
     }
}

function getUser()
{
    return new User();
}

getUser()->wakeup()->goodnight()->brush();