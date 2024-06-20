<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'order_id';

    protected $fillable = ['user_id', 'price', 'payment', 'status', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Отношение к товарам в заказе
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
