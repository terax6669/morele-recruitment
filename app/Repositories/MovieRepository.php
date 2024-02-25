<?php

namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Collection;

use function str_replace;

class MovieRepository
{
	public function getRandom(int $count): Collection
	{
		return Movie::inRandomOrder()->limit($count)->get();
	}

	public function getEvenLengthNameStartingWith(string $prefix): Collection
	{
		return Movie::query()->whereRaw('name LIKE ? ESCAPE "\"', [str_replace(['%', '_'], ['\%', '\_'], $prefix).'%'])->evenNameLength()->get();
	}

	public function getNameNotSingleWord(): Collection
	{
		return Movie::where('name', 'LIKE', '% %')->get();
	}
}
