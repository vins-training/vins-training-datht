<?php

namespace Vinsofts\Car;

use Illuminate\Database\Eloquent\Model;

class Category2 extends Model
{
    protected $table = 'category';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function Product(){
        return $this->hasMany('App\Product','cate_id','id');
    }
}
