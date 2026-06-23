<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademicStandard;

class AcademicStandardSeeder extends Seeder
{
    public function run(): void
    {
        $standards = [
            ['name' => 'Class 1', 'code' => 'C1', 'status' => 'active'],
            ['name' => 'Class 2', 'code' => 'C2', 'status' => 'active'],
        ];

        foreach ($standards as $standard) {
            AcademicStandard::create($standard);
        }
    }
}
