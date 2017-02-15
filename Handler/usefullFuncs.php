<?php
class usefullFuncs{

   public function getToday():string{
       $dt = new DateTime();
       $today = $dt->format('Y-m-d');

       return $today;
   }



}
?>