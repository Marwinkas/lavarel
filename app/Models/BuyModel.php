<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyModel extends Model
{
    protected $table = 'product_buy';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $connection = 'sqlite';
    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];
    
    use HasFactory;
}
