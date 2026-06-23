<?php

namespace Database\Seeders;
use App\Models\AcademicClass;


use Illuminate\Database\Seeder;

class AcademicClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [

            ['name' => 'Section A', 'code' => 'A', 'academic_standard_id' => 1, 'is_active' => true],

            ['name' => 'Section B', 'code' => 'B', 'academic_standard_id' => 1, 'is_active' => true],

            ['name' => 'Section A', 'code' => 'A', 'academic_standard_id' => 2, 'is_active' => true],

            ['name' => 'Section B', 'code' => 'B', 'academic_standard_id' => 2, 'is_active' => true],

        ];

        foreach ($classes as $class) {

            AcademicClass::create($class);

        }
    }
}
