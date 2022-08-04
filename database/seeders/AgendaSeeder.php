<?php

namespace Database\Seeders;

use App\Models\Agendarcita;
use Illuminate\Database\Seeder;


class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            array('mes'=>'Enero','cantidad'=>10),
            array('mes'=>'Febrero','cantidad'=>80),
            array('mes'=>'Marzo','cantidad'=>40),
            array('mes'=>'April','cantidad'=>30),
            array('mes'=>'Mayo','cantidad'=>20),
            array('mes'=>'Junio','cantidad'=>56),
            array('mes'=>'Julio','cantidad'=>60),
            array('mes'=>'Agosto','cantidad'=>45),
            array('mes'=>'Septiembre','cantidad'=>50),
            array('mes'=>'Octubre','cantidad'=>60),
            array('mes'=>'Noviembre','cantidad'=>80),
            array('mes'=>'Diciembre','cantidad'=>10),
        ];
        Agendarcita::insert($data);
    }
}
