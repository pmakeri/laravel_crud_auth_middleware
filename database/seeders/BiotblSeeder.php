<?php

namespace Database\Seeders;

use App\Models\Biotbl;
use Illuminate\Database\Seeder;

class BiotblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Biotbl::create(['name'=>'Peter Makeri Azi', 'email'=>'pmakeri@yahoo.com', 'phone'=>'08034398900', 'address'=>'Jos']);
        Biotbl::create(['name'=>'Moses James Job', 'email'=>'mjjames@gmail..com', 'phone'=>'08034398965', 'address'=>'Bauchi']);
    }
}
