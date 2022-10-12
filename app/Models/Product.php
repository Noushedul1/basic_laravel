<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'Car',
                'price' => '2000',
                'description' => 'description',
                'image' => asset('./img/pic2.jpg')
            ],
            1 => [
                'id' => 2,
                'name' => 'T-shirt',
                'price' => '2400',
                'description' => 'description',
                'image' => asset('./img/pic4.jpg')
            ],
            2 => [
                'id' => 3,
                'name' => 'Bike',
                'price' => '28000',
                'description' => 'description',
                'image' => asset('./img/pic6.jpg')
            ],
            3 => [
                'id' => 4,
                'name' => 'Coat',
                'price' => '90000',
                'description' => 'description',
                'image' => asset('./img/pic8.jpg')
            ]
            ];
    }
}
