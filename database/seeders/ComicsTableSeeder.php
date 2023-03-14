<?php

namespace Database\Seeders;
use App\Models\Comic;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics=config('comic');
        foreach($comics as $comic){
            $singleComic=new Comic;
            $singleComic->title=$comic['title'];
            $singleComic->descriptiom=$comic['description'];
            $singleComic->price=$comic['price'];
            $singleComic->series=$comic['series'];
            $singleComic->sale_date=$comic['sale_date'];
            $singleComic->type=$comic['type'];
            $singleComic->save();
        }
    }
}
