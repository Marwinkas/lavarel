<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $connection = 'sqlite';
    protected $attributes = [
        'options' => '[]',
        'delayed' => false,
    ];
    
    use HasFactory;
    public function orderProduct()
    {
                return $this->belongsTo(OrderProduct::class, 'order_product_id'); // Adjust the foreign key if necessary
            }
}
