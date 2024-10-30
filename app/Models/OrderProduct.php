<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'product_buy';
    protected $primaryKey = 'id';
    
    protected $connection = 'sqlite';
    protected $attributes = [
    ];
    protected $fillable = [
        'product_id',

        'cost',

        'amount',
        'user_id',

        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Assuming `user_id` is the foreign key in the `product_buy` table
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); // Assuming `user_id` is the foreign key in the `product_buy` table
    }
    use HasFactory;
}
