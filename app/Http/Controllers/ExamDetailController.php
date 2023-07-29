<?php

namespace App\Http\Controllers;

use App\Models\ExamDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function addToExam(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = ExamDetail::create($request->all());
        return response()->json((object)[
            'message' => 'success',
            'data' => $data,
        ]);
    }

    public function getSubjects(Request $request): \Illuminate\Http\JsonResponse
    {
        $subjects = DB::table('exam_details')
            ->where('examId', '=', $request->get('examId'))
            ->join('subjects', 'exam_details.subjectId', '=', 'subjects.id')->get();
        return response()->json((object)[
            'message' => 'success',
            'total' => sizeof($subjects),
            'data' => $subjects,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
