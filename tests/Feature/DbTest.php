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
        ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key')->select([
            'project_assignments.*',
            'project_grades.group_name',
            'project_grades.project_title',
            'project_grades.monitoring(5)',
            'project_grades.noti(5)',
            'project_grades.control(5)',
            'project_grades.storage(5)',
            'project_grades.logic(5)',
            'project_grades.slide(3)',
            'project_grades.present(3)',
            'project_grades.total',
        ]);


    $results = DB::table("rosters")
        ->joinSub($projects, "projects", function (JoinClause $join) {
            $join->on('rosters.student_id', '=', 'projects.student_id');
        })
        ->get();


    foreach ($results as $result) {
        print_r($result);
    }
    expect(true)->toBeTrue();
    // $response = $this->get('/');
    // $response->assertStatus(200);
});
