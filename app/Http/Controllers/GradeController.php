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
            ->leftJoin('project_grades', 'project_assignments.group_key', '=', 'project_grades.group_key')->select([
                'project_assignments.*',
                'project_grades.group_name',
                'project_grades.project_title',
                'project_grades.proposal(4)',
                'project_grades.monitoring(5)',
                'project_grades.noti(5)',
                'project_grades.control(5)',
                'project_grades.storage(5)',
                'project_grades.logic(5)',
                'project_grades.slide(3)',
                'project_grades.present(3)',
                'project_grades.total',
            ]);

        try {
            $results = DB::table("rosters")
                ->joinSub($projects, "projects", function (JoinClause $join) {
                    $join->on('rosters.student_id', '=', 'projects.student_id');
                })->where("rosters.student_id", "=", $validated["student_id"])
                ->firstOrFail();

            // dd([$results]);
            $groupKey = $results->group_key;
            $members = DB::table("project_assignments")
                ->where("project_assignments.group_key", "=", $groupKey)
                ->leftJoin('rosters', 'project_assignments.student_id', '=', 'rosters.student_id')->select([
                    'rosters.*',
                ])->get();
            // dd([$members]);
            
        } catch (\Throwable $e) {
            $results = null;
        };


        return view('pages.grade', [
            "grade" => $results,
            "members" => $members
        ]);
    }
}
