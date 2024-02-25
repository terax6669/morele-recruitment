<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	public $timestamps = false;

	public function scopeEvenNameLength(Builder $query): void
	{
		$query->whereRaw('LENGTH(name) % 2 = 0');
	}
}
