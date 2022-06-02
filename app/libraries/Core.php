<?php

/**
 *   APP Core Class
 *   Creates URL and loads core controller
 *   URL FORMAT  - / controller/method/params
 */

 class Core{
     protected $currentController ='Pages';
     protected $currentMethod ='index';
     protected $currentParams =[];

     public function __construct()
     {
         $this->getUrl();
     }
     public function getUrl(){
         if(isset($_GET['url'])){
             echo $_GET['url'];
         }
         else echo "no url is there";
     }
 }