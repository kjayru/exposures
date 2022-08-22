<?php

use Illuminate\Database\Seeder;

class BillingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Billing::class,50)->create();
    }
}
