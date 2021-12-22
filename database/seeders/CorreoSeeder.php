<?php

namespace Database\Seeders;

use App\Models\correo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CorreoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $correo = new correo();
        $correo->correo = 'example@gmail.com';
        $correo->api_token = Str::random(20);
        $correo->save();
    }
}
