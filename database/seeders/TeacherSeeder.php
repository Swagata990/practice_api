<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name'=>'Riya Das',
            'subject'=>'History',
            'qualification'=>'Masters',
            'phone_no'=>'7890654321',
            'email'=>'riya@gmail.com',
            'salary'=>'25000',
            'gender'=>'Female'
        ]);
    }
}
