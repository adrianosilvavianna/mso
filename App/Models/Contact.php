<?php
namespace App\Models;

class Contact extends Model {

    protected $table      = "contacts";
    public    $requested  = ['name','email', 'message', 'category'];
    
}