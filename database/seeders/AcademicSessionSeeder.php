<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademicSession;

class AcademicSessionSeeder extends Seeder
{
    public function run(): void
    {
        AcademicSession::create([
            'name' => '2025-2026',
            'start_date' => '2025-04-01',
            'end_date' => '2026-03-31',
            'is_current' => true,
            'is_active' => true,
        ]);

        AcademicSession::create([
            'name' => '2024-2025',
            'start_date' => '2024-04-01',
            'end_date' => '2025-03-31',
            'is_current' => false,
            'is_active' => false,
        ]);
    }
}
