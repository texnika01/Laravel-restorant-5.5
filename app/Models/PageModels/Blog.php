<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
    	'title', 'text', 'image', 'category_id', 'user_id' , 'active'
	];

	/** Relation */

	public function category() {
		return $this->belongsToMany('App\Models\PageModels\Category');
	}

	/**
	 * Get User
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() {
		return $this->belongsTo('App\Models\Auth\User');
	}
}
