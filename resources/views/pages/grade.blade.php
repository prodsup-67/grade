@extends('layouts.default')
@section('content')
    {{-- {{ dd($classGrade) }} --}}
    @if (!is_null($projectGrade) && !is_null($projectGrade->total) && !is_null($classGrade))
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flex flex-col gap-2 mt-4">
            <div class="text-4xl font-bold text-gray-700">{{ $projectGrade->firstname }} {{ $projectGrade->lastname }}</div>
            <div class="text-lg text-gray-600">คะแนนเก็บ</div>
        </div>
        <table class="mt-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Score
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Full Score
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Your Score
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Attendance
                    </th>
                    <td class="px-6 py-4">
                        10%
                    </td>
                    <td class="px-6 py-4">
                        {{ $classGrade->{"Class (AC) (3%)"} + $classGrade->{"Class (SR) (3%)"} + $classGrade->{"Class (NR) (3%)"} + 1 }}%
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Quiz (อ.อนิรุจ)
                    </th>
                    <td class="px-6 py-4">
                        10%
                    </td>
                    <td class="px-6 py-4">
                        {{ $classGrade->{"Quiz (AC) (10%)"} }}%
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Report 1 (อ.อนิรุจ)
                    </th>
                    <td class="px-6 py-4">
                        5%
                    </td>
                    <td class="px-6 py-4">
                        {{ $classGrade->{"Report 1 (AC) (5%)"} }}%
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Report 2 (อ.อนิรุจ)
                    </th>
                    <td class="px-6 py-4">
                        10%
                    </td>
                    <td class="px-6 py-4">
                        (รอประกาศภายหลัง)
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Quiz (อ.ศักดิ์เกษม)
                    </th>
                    <td class="px-6 py-4">
                        10%
                    </td>
                    <td class="px-6 py-4">
                        {{ $classGrade->{"Quiz (SR) (10%)"} }}%
                    </td>
                </tr>
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Project (อ.นิรันดร์)
                    </th>
                    <td class="px-6 py-4">
                        20%
                    </td>
                    <td class="px-6 py-4">
                        {{ $classGrade->{"Project (NR) (20%)"} }}%
                    </td>
                </tr>
              
            </tbody>
        </table>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flex flex-col gap-2 mt-4">
            <div class="text-4xl font-bold text-gray-700">{{ $projectGrade->firstname }} {{ $projectGrade->lastname }}</div>
            <div class="text-lg text-gray-600">Group: {{ $projectGrade->group_name }}</div>
            <div class="text-lg text-gray-600">Project: {{ $projectGrade->project_title }}</div>
        </div>
        <table class="mt-6 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Score
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Full Score
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Your Score
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Proposal
                    </th>
                    <td class="px-6 py-4">
                        4
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"proposal(4)"} }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Monitoring
                    </th>
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"monitoring(5)"} }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Notification
                    </th>
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"noti(5)"} }}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Control
                    </th>
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"control(5)"} }}
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Storage
                    </th>
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"storage(5)"} }}
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Logic
                    </th>
                    <td class="px-6 py-4">
                        5
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"logic(5)"} }}
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Slide
                    </th>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"slide(3)"} }}
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Presentation
                    </th>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"present(3)"} }}
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Total
                    </th>
                    <td class="px-6 py-4">
                        35
                    </td>
                    <td class="px-6 py-4">
                        {{ $projectGrade->{"total"} }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mt-4">
            <div class="text-4xl font-bold text-gray-700">Team Member</div>
            <div class="text-lg text-gray-600">Group: {{ $projectGrade->group_name }}</div>
        </div>
        <div class="flex mt-4 gap-2">
            @foreach ($members as $member)
               <div class="text-white bg-blue-500 px-2 py-1 rounded-md">{{ $member->firstname }} {{ $member->lastname }}</div>
            @endforeach
        </div>
        <div class="text-gray-400 italic mt-2">(ฝากเช็คความถูกต้อง)</div>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    @else
        <div class="text-2xl mt-2 text-gray-600">ไม่พบคะแนน ติดต่อ อ.นิรันดร์ ด่วน</div>
    @endif
@endsection
