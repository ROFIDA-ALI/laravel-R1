<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory , SoftDeletes; //  coulmns data that user  can insert or edit only
    protected $fillable = [
        'carTitle' ,'description', 'published'];   //same #name in blade file 
    

}
