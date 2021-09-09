<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');
        foreach ($arrayComics as $comic) {
            $dettaglio = new Comic();
            $dettaglio->title = $comic['title'];
            $dettaglio->description = $comic['description'];
            $dettaglio->thumb = $comic['thumb'];
            $dettaglio->price = $comic['price'];
            $dettaglio->series = $comic['series'];
            $dettaglio->sale_date = $comic['sale_date'];
            $dettaglio->type = $comic['type'];
            $dettaglio->save();
        }
    }
}
