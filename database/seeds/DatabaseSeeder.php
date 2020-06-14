<?php

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

        // $this->call(Penyakitseeder::class);
        // $this->call(GejalaSeeder::class);
        // $this->call(SolusiSeeder::class);
        $this->call(TentuSeeder::class);

    }
}
