<?php

namespace Database\Seeders;

use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\ClassGrade;

class ClassGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath('data_seed/S01_grade_combined.csv', 'r')->setHeaderOffset(0)->setEscape('');

        $dataStore = [];
        foreach ($csv as $record) {
            array_push($dataStore, [
                "id" => Str::uuid()->toString(),
                "student_id"  => $record["student_id"],
                "Class (AC) (3%)"  => $record["Class (AC) (3%)"],
                "Class (SR) (3%)"  => $record["Class (SR) (3%)"],
                "Class (NR) (3%)"  => $record["Class (NR) (3%)"],
                "Class (1) (1%)"  => $record["Class (1) (1%)"],
                "Quiz (AC) (10%)"  => $record["Quiz (AC) (10%)"],
                "Quiz (SR) (10%)"  => $record["Quiz (SR) (10%)"],
                "Report 1 (AC) (5%)" => $record["Report 1 (AC) (5%)"],
                "Report 2 (AC) (10%)"  => $record["Report 2 (AC) (10%)"],
                "Project (NR) (20%)"  => $record["Project (NR) (20%)"],
                "Final (AC) (5%)"  => $record["Final (AC) (5%)"],
                "Final (SR1) (10%)"  => $record["Final (SR1) (10%)"],
                "Final (SR2) (10%)"  => $record["Final (SR2) (10%)"],
                "Final (NR1) (5%)"  => $record["Final (NR1) (5%)"],
                "Final (NR2) (5%)" => $record["Final (NR2) (5%)"],
            ]);
        }
        ClassGrade::insert($dataStore);
    }
}
