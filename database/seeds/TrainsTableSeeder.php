<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains =
        [
            [
                'colonna1' => 'Val_1',
                'colonna2' => 'Val_2',
                'colonna3' => 'Val_3',
                'colonna4' => 'Val_4',
                'colonna5' => 'Val_5',
                'colonna6' => 'Val_6',
                'colonna7' => 'Val_7',
                'colonna8' => 10.3,
                'is_available' => 1
            ]
        ];

        foreach($trains as $elem)
        {
            $newTrain = new Train();

            $newTrain->colonna1 = $elem['colonna1'];
            $newTrain->colonna2 = $elem['colonna2'];
            $newTrain->colonna3 = $elem['colonna3'];
            $newTrain->colonna4 = $elem['colonna4'];
            $newTrain->colonna5 = $elem['colonna5'];
            $newTrain->colonna6 = $elem['colonna6'];
            $newTrain->colonna7 = $elem['colonna7'];
            $newTrain->colonna8 = $elem['colonna8'];
            $newTrain->is_available = $elem['is_available'];

            $newTrain->save();
        }
    }
}
