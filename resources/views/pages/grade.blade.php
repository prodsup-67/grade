@extends('layouts.default')
@section('content')
    {{-- {{ dd($grade) }} --}}
    @if (!is_null($grade) && !is_null($grade->total))
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="flex flex-col gap-2 mt-4">
            <div class="text-4xl font-bold text-gray-700">{{ $grade->firstname }} {{ $grade->lastname }}</div>
            <div class="text-lg text-gray-600">Group: {{ $grade->group_name }}</div>
            <div class="text-lg text-gray-600">Project: {{ $grade->project_title }}</div>
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
                        {{ $grade->{"proposal(4)"} }}
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
                        {{ $grade->{"monitoring(5)"} }}
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
                        {{ $grade->{"noti(5)"} }}
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
                        {{ $grade->{"control(5)"} }}
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
                        {{ $grade->{"storage(5)"} }}
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
                        {{ $grade->{"logic(5)"} }}
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
                        {{ $grade->{"slide(3)"} }}
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
                        {{ $grade->{"present(3)"} }}
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
                        {{ $grade->{"total"} }}
                    </td>
                </tr>
            </tbody>
        </table>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
        <div class="mt-4">
            <div class="text-4xl font-bold text-gray-700">Team Member</div>
            <div class="text-lg text-gray-600">Group: {{ $grade->group_name }}</div>
        </div>
        <div class="flex mt-4 gap-2">
            @foreach ($members as $member)
               <div class="text-white bg-blue-500 px-2 py-1 rounded-md">{{ $member->firstname }} {{ $member->lastname }}</div>
            @endforeach
        </div>
        <div class="text-gray-400 italic mt-2">(ฝากเช็คความถูกต้อง)</div>

        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    @else
        <div class="text-2xl mt-2 text-gray-600">ไม่พบคะแนน รอทำโปรเจคก่อน</div>
    @endif
@endsection
