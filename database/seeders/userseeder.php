<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\user();
        $admin->name = "Rifki M F";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('12345678');
        $admin->save();
    }
    
}
