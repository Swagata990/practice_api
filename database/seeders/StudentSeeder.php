<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([

            'name' => 'Swagata Ghosh',

            'gurdian_name'=>'Biplab Ghosh',

            'address'=>'Kolkata',

            'gender'=>'Female',

            'email_id'=>'swagataghosh@gmail.com',

            'phone_no'=>'9875441346',

            'dob'=>'11.10.2007'

        ]);
    }
}
