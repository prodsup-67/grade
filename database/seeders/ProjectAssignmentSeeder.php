<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectAssignment;
use League\Csv\Reader;

class ProjectAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csv = Reader::createFromPath('data_seed/project_assignment.csv', 'r')->setHeaderOffset(0)
            ->setEscape('');

        foreach ($csv as $record) {
            // print_r($record["first"]);
            $result = ProjectAssignment::create([
                "student_id" => $record["student_id"],
                "group_key" => $record["group_key"],
            ]);
        }
    }
}
