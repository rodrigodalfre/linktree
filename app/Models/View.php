<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    public $timestamp = false;

    protected $fillable = ['id_page', 'view_date'];
}
