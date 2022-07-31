<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable =[
        'logo',
        'title',
        'sub_title',
        'description',
        'google_play_url',
        'app_store_url',
        'application_screens',
    ];
}