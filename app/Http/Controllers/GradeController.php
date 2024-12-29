<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class GradeController extends Controller
{
    public function getGrade(Request $request)
    {

        $projects = DB::table("project_assignments")
            ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key');

        $results = DB::table("rosters")
            ->joinSub($projects, "projects", function (JoinClause $join) {
                $join->on('rosters.student_id', '=', 'projects.student_id');
            })->where("rosters.student_id", "=", "660612134")
            ->get();

        return view('grade', [
            "grade" => $results
        ]);
    }
}
