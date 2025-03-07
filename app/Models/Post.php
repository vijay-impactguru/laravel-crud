<?php
// In app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Define the fillable attributes to allow mass assignment
    protected $fillable = ['title', 'content', 'status','category_id'];

    // Optional: You can also define attributes you want to **exclude** from mass-assignment
    // protected $guarded = ['id']; // If you don't want the 'id' column to be mass-assigned.
}
