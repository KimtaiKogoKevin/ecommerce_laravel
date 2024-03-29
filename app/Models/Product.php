<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [ 'category_id','name','slug','price','category','description','gallery'];

    public function getRouteKeyName()
    {
        return 'slug';
    } 

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
