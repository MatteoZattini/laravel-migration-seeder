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
        $train->Orario_di_partenza = "12:10:22";
        $train->Orario_di_arrivo = "13:10:22";
        $train->Codice_Treno = "relkgcnmbkldfgqkfl10";
        $train->Numero_Carrozze = 4;
        $train->In_orario = false;
        $train->Cancellato = true;
        $train->save();
    }
}
