<?php

class Chirps{

     private string $message;
     private string $auteur; 
     private datetime $date;

    function __construct(string $message, string $auteur, datetime $date){
         $this->message =$message;
         $this->auteur = $auteur; 
         $this->date = $date;
    
    }
}