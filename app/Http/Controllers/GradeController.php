<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class GradeController extends Controller
{
    public function getGrade(Request $request)
    {

        $validated = $request->validate([
            "student_id" => ['required', 'min:9', 'max:9', 'regex:/\d+/'],
        ]);

        $projects = DB::table("project_assignments")
            ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key');

        try {
            $results = DB::table("rosters")
                ->joinSub($projects, "projects", function (JoinClause $join) {
                    $join->on('rosters.student_id', '=', 'projects.student_id');
                })->where("rosters.student_id", "=", $validated["student_id"])
                ->firstOrFail();
        } catch (\Throwable $e) {
            $results = null;
        };


        return view('pages.grade', [
            "grade" => $results,
        ]);
    }
}
