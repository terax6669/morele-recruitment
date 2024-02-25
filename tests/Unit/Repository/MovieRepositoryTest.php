<?php

namespace Tests\Unit;

use App\Repositories\MovieRepository;
use Database\Seeders\Test\MovieSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

use function app;

class MovieRepositoryTest extends TestCase
{
	use RefreshDatabase;

	protected MovieRepository $repo;
	protected bool $seed = true;
	protected string $seeder = MovieSeeder::class;

	protected function setUp(): void
	{
		parent::setUp();

		$this->repo = app(MovieRepository::class);
	}

	public function test_random_count(): void
	{
		$list = $this->repo->getRandom(3);

		$this->assertEquals($list->count(), 3);
	}

	public function test_random_randomness(): void
	{
		$movie = $this->repo->getRandom(1)->first();
		$success = false;

		for ($i = 0; $i < 10; $i++) {
			$newMovie = $this->repo->getRandom(1)->first();
			if ($newMovie->id !== $movie->id) {
				$success = true;
				break;
			}
		}

		$this->assertTrue($success, 'Results should be random');
	}

	public static function evenLengthNameStartingWithProvider()
	{
		return [
			['A', 1],
			['Sz', 2],
			['W', 4],
			['W%', 1],
			['ZzZzZ', 0],
		];
	}

	#[DataProvider('evenLengthNameStartingWithProvider')]
	public function test_even_length_name_starting_with(string $prefix, int $expectedCount): void
	{
		$list = $this->repo->getEvenLengthNameStartingWith($prefix);

		foreach ($list as $movie) {
			$this->assertStringStartsWith($prefix, $movie->name, "Results should contain only titles starting with '$prefix'.");
			$this->assertEquals(0, mb_strlen($movie->name) % 2, "Results should contain only titles with an even length ($movie->name).");
		}

		$this->assertEquals($expectedCount, $list->count(), "Results should contain all titles starting with $prefix. and even number of characters");
	}

	public function test_name_not_single_word(): void
	{
		$list = $this->repo->getNameNotSingleWord();

		foreach ($list as $movie) {
			$this->assertStringContainsString(' ', trim($movie->name), 'Results should contain only titles consisting of more than a single word.');
		}

		$this->assertEquals(58, $list->count(), 'Results should contain all titles consisting of more than a single word.');
	}
}
