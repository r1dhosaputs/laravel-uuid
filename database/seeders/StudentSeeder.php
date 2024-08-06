<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Str;



class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // kosongkan tabel sebelum seeder
        DB::table('students')->truncate();

        $data = ['tony', 'andy', 'ani'];

        foreach ($data as $value) {
            Student::create([
                'id' => Str::uuid(),
                'name' => $value
            ]);
        }
    }
}
