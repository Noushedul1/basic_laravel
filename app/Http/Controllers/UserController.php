<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $country;
    private $mobile;
    private $roll;
    private $students;
    private $products;
    function welcome() 
    {
        return view('welcome');
    }
    function details() 
    {
        $this->mobile = "01789773681";
        $this->country = "bangladesh";
        $this->roll = [1,2,3,4,5,6];
        $this->students = [
            0 => [
                'name' => 'noushedul islam',
                'email' => 'noushedakib@gmail.com',
                'country' => 'bangladesh'
            ],
            1 => [
                'name' => 'farhad islam',
                'email' => 'farhad@gmail.com',
                'country' => 'bangladesh'
            ],
            2 => [
                'name' => 'anishul islam',
                'email' => 'anish@gmail.com',
                'county' => 'bangladesh'
            ]
        ];

        return view('details',[
            'rakib'=>$this->mobile,
            'akib' =>$this->country,
            'data' =>$this->roll,
            'islam' =>$this->students
        ]);
    }
    function about() 
    {
        $this->products = Product::getAllProduct();
        // return $this->product;
        return view('about',['products' => $this->products]);
    }
    function pDetail($id)
    {
        // return $akib;
        $this->products = Product::getAllProduct();
        foreach($this->products as $item){
            if($item['id'] == $id) {
                return view('pdetails',['data' => $item]);
            }
        }
    }
    function contact() 
    {
        return view('contact');
    }
}
