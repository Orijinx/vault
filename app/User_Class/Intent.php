<?php
namespace App\User_Class;
class Intent
{
 Public $Page_Name="UNKNOWN";
 Public $Send_Param="";


 function __construct($name){
     $this->Page_Name = $name;}
function __construct($name,$send){
    $this->Page_Name = $name;
    $this->Send_Param= $send;
}
}
