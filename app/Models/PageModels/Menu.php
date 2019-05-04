<?php

namespace App\Models\PageModels;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
		'id','title', 'menu', 'image', 'menu_category', 'active'
	];

    /** Relations */

	/**
	 * Get Category
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function menucategory() {
		return $this->belongsToMany('App\Models\PageModels\Menucategory');
	}
}
