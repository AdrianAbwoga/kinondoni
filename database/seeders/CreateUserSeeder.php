<?php

namespace Database\Seeders;
use App\Models\tbl_staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tbl_staffs = 
            [
               'staff_name'=>'User',
               'staff_email'=>'user@cambotutorial.com',
               'staff_role'=> 1,
               'staff_password'=> bcrypt('123456'),
            ];
            foreach ($tbl_staffs as $key => $staff) 
        {
            tbl_staff::create($staff);
        }
    }
}
