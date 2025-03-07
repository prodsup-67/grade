<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\ProjectGrade;
use Illuminate\Support\Str;

class ProjectGradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath('data_seed/S01_project_grade.csv', 'r')->setHeaderOffset(0)
            ->setEscape('');

        // foreach ($csv as $record) {
        //     $result = ProjectGrade::create([
        //         "group_name" => $record["group_name"],
        //         "group_key" => $record["group_key"],
        //         "project_title" => $record["project_title"],
        //         "proposal(4)" => $record["proposal(4)"],
        //         "monitoring(5)" => $record["monitoring(5)"],
        //         "noti(5)" => $record["noti(5)"],
        //         "control(5)" => $record["control(5)"],
        //         "storage(5)" => $record["storage(5)"],
        //         "logic(5)" => $record["logic(5)"],
        //         "slide(3)" => $record["slide(3)"],
        //         "present(3)" => $record["present(3)"],
        //         "total" => $record["total"],
        //         "abet" => $record["abet"],
        //     ]);
        // }

        $dataStore = [];
        foreach ($csv as $record) {
            array_push($dataStore, [
                "id" => Str::uuid()->toString(),                
                "group_name" => $record["group_name"],
                "group_key" => $record["group_key"],
                "project_title" => $record["project_title"],
                "proposal(4)" => $record["proposal(4)"],
                "monitoring(5)" => $record["monitoring(5)"],
                "noti(5)" => $record["noti(5)"],
                "control(5)" => $record["control(5)"],
                "storage(5)" => $record["storage(5)"],
                "logic(5)" => $record["logic(5)"],
                "slide(3)" => $record["slide(3)"],
                "present(3)" => $record["present(3)"],
                "total" => $record["total"],
                "abet" => $record["abet"],
            ]);
        }
        ProjectGrade::insert($dataStore);

    }
}
