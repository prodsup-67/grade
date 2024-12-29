<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roster;
use League\Csv\Reader;


class RosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $csv = Reader::createFromPath('data_seed/roster.csv', 'r')->setHeaderOffset(0)
            ->setEscape('');
        foreach ($csv as $record) {
            // print_r($record["first"]);
            $roster = Roster::create([
                "student_id" => $record["student_id"],
                "firstname" => $record["firstname"],
                "lastname" => $record["lastname"],
                "email" => $record["email"],
                "sec" => $record["sec"]
            ]);
        }


        // dd([$roster]);
    }
}
