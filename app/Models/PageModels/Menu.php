<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
		'title', 'menu', 'image', 'category_id', 'active'
	];

    /** Relations */

	/**
	 * Get Category
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function category() {
		return $this->belongsToMany('App\Models\PageModels\Category');
	}
}
