<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory; //  coulmns data that user  can insert or edit only
    protected $fillable = [
        'carTitle' ,'description', 'published'];   //same #name in blade file 
    

}
