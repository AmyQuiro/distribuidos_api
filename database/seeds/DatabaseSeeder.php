<?php

use App\Model\DatosClima;
use App\Model\Dispositivos;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $newDispositivo = Dispositivos::create([
            'idEstacion' => "99:22:AA:BB:CC:01",
            'fechaHoraReg' => date('Y-m-d H:m:s'),
            'ultimaFechaDatos' => date('Y-m-d H:m:s'),
            'ultimaTemp' => 23.5,
            'ultimaHumed' => 66.5,
            'estado' => "true"
        ]);

        DatosClima::create([
            'fechaHora' => date('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 23.5,
            'humedad' => 68.6
        ]);
        DatosClima::create([
            'fechaHora' => date('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 23.5,
            'humedad' => 69.6
        ]);
        DatosClima::create([
            'fechaHora' => date('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 26.5,
            'humedad' => 70.6
        ]);
        DatosClima::create([
            'fechaHora' => date('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 24.5,
            'humedad' => 72.6
        ]);
        DatosClima::create([
            'fechaHora' => Carbon::now()->add(-40, 'day')->format('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 20.8,
            'humedad' => 65.6
        ]);
        DatosClima::create([
            'fechaHora' => Carbon::now()->add(-5, 'day')->format('Y-m-d H:m:s'),
            'IdDispositivo' => $newDispositivo->id,
            'temperatura' => 24.8,
            'humedad' => 77.6
        ]);
    }
}
