<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['name' => 'СТРИЖКА'],
            ['name' => 'СТРИЖКА ПІД НАСАДКУ'],
            ['name' => 'СТРИЖКА БОРОДИ'],
            ['name' => 'СТРИЖКА ТА ГОЛІННЯ БОРОДИ'],
            ['name' => 'КОРОЛІВСЬКЕ ГОЛІННЯ'],
        ];
        foreach($services as $service) {
            \App\Models\Service::create($service);
        }
    }
}
