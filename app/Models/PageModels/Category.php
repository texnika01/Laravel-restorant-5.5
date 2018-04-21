<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name', 'description', 'active'
	];
   /** Relations */
}
