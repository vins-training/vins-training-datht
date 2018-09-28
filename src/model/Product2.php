<?php

namespace Vinsofts\Car;

use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    //
    protected $table = 'product';
    protected $fillable = [];
    
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Category','cate_id','id');
    }

    
}
