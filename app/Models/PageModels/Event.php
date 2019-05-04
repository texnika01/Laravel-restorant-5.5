<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
    	'name', 'date', 'text','image', 'active'
	];

    /** Relations */

}
