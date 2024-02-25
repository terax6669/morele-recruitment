<?php

namespace Database\Seeders\Test;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
	use WithoutModelEvents;

    public function run(): void
    {
		$this->withoutModelEvents(function() {
			Movie::create(['name' => 'Pulp Fiction']);
			Movie::create(['name' => 'Incepcja']);
			Movie::create(['name' => 'Skazani na Shawshank']);
			Movie::create(['name' => 'Dwunastu gniewnych ludzi']);
			Movie::create(['name' => 'Ojciec chrzestny']);
			Movie::create(['name' => 'Django']);
			Movie::create(['name' => 'Matrix']);
			Movie::create(['name' => 'Leon zawodowiec']);
			Movie::create(['name' => 'Siedem']);
			Movie::create(['name' => 'Nietykalni']);
			Movie::create(['name' => 'Władca Pierścieni: Powrót króla']);
			Movie::create(['name' => 'W%ładca Pierścieni: Powrót króla']);
			Movie::create(['name' => 'Fight Club']);
			Movie::create(['name' => 'Forrest Gump']);
			Movie::create(['name' => 'Chłopaki nie płaczą']);
			Movie::create(['name' => 'Gladiator']);
			Movie::create(['name' => 'Człowiek z blizną']);
			Movie::create(['name' => 'Pianista']);
			Movie::create(['name' => 'Doktor Strange']);
			Movie::create(['name' => 'Szeregowiec Ryan']);
			Movie::create(['name' => 'Lot nad kukułczym gniazdem']);
			Movie::create(['name' => 'Wielki Gatsby']);
			Movie::create(['name' => 'Avengers: Wojna bez granic']);
			Movie::create(['name' => 'Życie jest piękne']);
			Movie::create(['name' => 'Pożegnanie z Afryką']);
			Movie::create(['name' => 'Szczęki']);
			Movie::create(['name' => 'Milczenie owiec']);
			Movie::create(['name' => 'Dzień świra']);
			Movie::create(['name' => 'Blade Runner']);
			Movie::create(['name' => 'Labirynt']);
			Movie::create(['name' => 'Król Lew']);
			Movie::create(['name' => 'La La Land']);
			Movie::create(['name' => 'Whiplash']);
			Movie::create(['name' => 'Wyspa tajemnic']);
			Movie::create(['name' => 'Django']);
			Movie::create(['name' => 'American Beauty']);
			Movie::create(['name' => 'Szósty zmysł']);
			Movie::create(['name' => 'Gwiezdne wojny: Nowa nadzieja']);
			Movie::create(['name' => 'Mroczny Rycerz']);
			Movie::create(['name' => 'Władca Pierścieni: Drużyna Pierścienia']);
			Movie::create(['name' => 'Harry Potter i Kamień Filozoficzny']);
			Movie::create(['name' => 'Green Mile']);
			Movie::create(['name' => 'Iniemamocni']);
			Movie::create(['name' => 'Shrek']);
			Movie::create(['name' => 'Mad Max: Na drodze gniewu']);
			Movie::create(['name' => 'Terminator 2: Dzień sądu']);
			Movie::create(['name' => 'Piraci z Karaibów: Klątwa Czarnej Perły']);
			Movie::create(['name' => 'Truman Show']);
			Movie::create(['name' => 'Skazany na bluesa']);
			Movie::create(['name' => 'Infiltracja']);
			Movie::create(['name' => 'Gran Torino']);
			Movie::create(['name' => 'Spotlight']);
			Movie::create(['name' => 'Mroczna wieża']);
			Movie::create(['name' => 'Rocky']);
			Movie::create(['name' => 'Casino Royale']);
			Movie::create(['name' => 'Drive']);
			Movie::create(['name' => 'Piękny umysł']);
			Movie::create(['name' => 'Władca Pierścieni: Dwie wieże']);
			Movie::create(['name' => 'Zielona mila']);
			Movie::create(['name' => 'Requiem dla snu']);
			Movie::create(['name' => 'Forest Gump']);
			Movie::create(['name' => 'Requiem dla snu']);
			Movie::create(['name' => 'Milczenie owiec']);
			Movie::create(['name' => 'Czarnobyl']);
			Movie::create(['name' => 'Breaking Bad']);
			Movie::create(['name' => 'Nędznicy']);
			Movie::create(['name' => 'Seksmisja']);
			Movie::create(['name' => 'Pachnidło']);
			Movie::create(['name' => 'Nagi instynkt']);
			Movie::create(['name' => 'Zjawa']);
			Movie::create(['name' => 'Igrzyska śmierci']);
			Movie::create(['name' => 'Kiler']);
			Movie::create(['name' => 'Siedem dusz']);
			Movie::create(['name' => 'Dzień świra']);
			Movie::create(['name' => 'Upadek']);
			Movie::create(['name' => 'Lśnienie']);
			Movie::create(['name' => 'Pan życia i śmierci']);
			Movie::create(['name' => 'Gladiator']);
			Movie::create(['name' => 'Granica']);
			Movie::create(['name' => 'Hobbit: Niezwykła podróż']);
			Movie::create(['name' => 'Pachnidło: Historia mordercy']);
			Movie::create(['name' => 'Wielki Gatsby']);
			Movie::create(['name' => 'Titanic']);
			Movie::create(['name' => 'Sin City']);
			Movie::create(['name' => 'Przeminęło z wiatrem']);
			Movie::create(['name' => 'Królowa śniegu']);
		})();
    }
}
