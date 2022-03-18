<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        $this-> call(ProductSeeder::class);

        $this-> call(PelangganSeeder::class);
=======
        $this->call(PegawaiSeeder::class);
        $this->call(SupplierSeeder::class);
>>>>>>> 2a57f025ad0e681bb81dad29a663bcf8cd920187
    }
}