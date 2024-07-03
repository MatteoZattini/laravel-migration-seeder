<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $train = new Train();
        $train->Azienda = "TreniItalia";
        $train->Stazione_di_partenza = "Nettuno";
        $train->Stazione_di_arrivo = "Roma Termni";
        $train->Orario_di_partenza = time(12:10:22);
        $train->Orario_di_arrivo = "Treni Italia";
        $train->Azienda = "Treni Italia";
        $train->Azienda = "Treni Italia";
        $train->Azienda = "Treni Italia";
        $train->Azienda = "Treni Italia";
    }
}
