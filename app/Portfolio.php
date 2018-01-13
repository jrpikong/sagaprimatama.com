<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    protected $fillable = ['client_name','client_img','client_address','description','description','status'];
    
}
