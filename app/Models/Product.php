<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'slug', 'description', 'stock', 'soldePrice', 'regularPrice', 'imageUrls', 'brand', 'isIphone', 'isSamsung', 'isHuawei', 'isAvailable'];

	public function categories()
	{
		
		return $this->belongsToMany(\App\Models\Category::class);
	
	}

	public function imageUrls()
    {
        
        return json_decode($this->imageUrls, true);
	}


}
