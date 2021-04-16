<?php

use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chapters')->insert([
            'name' => 'Gdzieś pomiędzy gwiazdami',
            'description' => 'Gdy miasto zasypia a słońce gaśnie. Gdy dookoła robi się ciemno a wszystko odchodzi w senność. To jedyne miejsce bezpieczne, w którym wszystko staje się miękkie i ciepłe. Koszmary pod nim się chowają, jednak dziś podpowiedzi się tam skrywają. ',
            'tip' => 'Oczy Ci się szklą gdy po 22 już na zegarku, zmęczona po całym dniu, siły Ci brak już... Udajesz się do miejsca, gdzie położyć Ci się uda, wskazówka pod nim się znajduje, gdzie podłoga jest strasznie brudna. 🧹',
            'image' => 'chapter_1.svg',
            'video' => 'chapter_1.mp4',
            'code' => 1994,
        ]);
    }
}
