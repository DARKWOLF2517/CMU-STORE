<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
                'role_id' =>'1',
                'name' =>'admin',
            ]);
        DB::table('roles')->insert([
            'role_id' =>'2',
            'name' =>'student',
        ]);
    }
}
