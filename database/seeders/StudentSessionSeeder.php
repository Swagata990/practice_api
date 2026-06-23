<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\StudentSession;

class StudentSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentSession::create([

            'student_id'=>'1',
            'academic_session_id'=>'1',
            'academic_class_id'=>'1',
            'roll_no'=>'1'

        ]);
    }
}
