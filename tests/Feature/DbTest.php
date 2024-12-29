<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

test('example', function () {

    // $results = DB::table("project_grades")->get();
    // foreach ($results as $result) {
    //     echo $result->group_name;
    // }


    // $rosters = DB::table("rosters")
    //     ->leftJoin('project_assignments', 'rosters.student_id', '=', 'project_assignments.student_id')
    //     ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key')
    //     // ->toSql();
    //     ->get();
    //     // print_r($results);

    $projects = DB::table("project_assignments")
        ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key');

    $results = DB::table("rosters")
        ->joinSub($projects, "projects", function (JoinClause $join) {
            $join->on('rosters.student_id', '=', 'projects.student_id');
        })->where("rosters.student_id", "=", "660612134")
        ->get();


    foreach ($results as $result) {
        print_r($result);
    }
    expect(true)->toBeTrue();
    // $response = $this->get('/');
    // $response->assertStatus(200);
});
