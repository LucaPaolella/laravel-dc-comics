<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Models\ComicsModel;

class ComicsTableSeeder extends Seeder
{
    /**
     * @return void
     **/
    public function run()
    {
        $comics = config("comics");


        if (!is_null($comics)) {
            foreach ($comics as $comic) {
                $newComic = new ComicsModel();

                $newComic->title = $comic['title'];
                $newComic->description = $comic['description'];
                $newComic->thumb = $comic['thumb'];
                $newComic->price = $comic['price'];
                $newComic->series = $comic['series'];
                $newComic->sale_date = $comic['sale_date'];
                $newComic->type = $comic['type'];
                $newComic->artists = implode(" , ", $comic['artists']);
                $newComic->writers = implode(" , ", $comic['writers']);
                $newComic->save();
            }
        }
    }
}
