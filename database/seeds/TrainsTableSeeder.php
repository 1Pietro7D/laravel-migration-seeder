<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 25; $i++){
        $randomDate= $faker->date();

        $train = new Train();
        $train->Azienda= $faker->name();
        $train->Stazione_di_partenza= $faker->city();
        $train->Stazione_di_arrivo= $faker->city();
        $train->Orario_di_partenza= $faker->time();
        $train->Orario_di_arrivo= $faker->time();
        $train->Data_di_partenza= $randomDate;
        $train->Data_di_arrivo= $randomDate;
        $train->Codice_Treno= $faker-> randomLetter() . $i;


        $train->save();
    }}
}
