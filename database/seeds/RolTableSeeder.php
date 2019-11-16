<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrator',
            'editor',
            'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'name' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
