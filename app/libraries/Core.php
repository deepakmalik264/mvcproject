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
         echo $_GET['url'];
     }
 }