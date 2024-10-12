<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $connection = 'sqlite';
    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];
    
    use HasFactory;
}
