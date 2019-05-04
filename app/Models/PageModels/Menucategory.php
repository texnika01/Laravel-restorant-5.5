<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Menucategory extends Model
{
    protected $table = 'menu_categories';

    protected $fillable = [
    	'id','name', 'description', 'active'
    ];
    
    /** relations */
   
}
