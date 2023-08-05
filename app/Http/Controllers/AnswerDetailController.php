<?php

namespace App\Http\Controllers;

use App\Models\AnswerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerDetailController extends Controller
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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $record = AnswerDetail::create($request->all());
        return response()->json((object)[
            'message' => 'success',
            'data' => $record,
        ]);
    }

    public function getStudentResult(Request $request): \Illuminate\Http\JsonResponse
    {
        $records = DB::table('answer_details')
            ->where('studentId', '=', $request->get('studentId'))
            ->join('subjects', 'answer_details.subjectId', '=', 'subjects.id')
            ->join('questions', 'answer_details.questionId', '=', 'questions.id')
            ->join('lessons', 'answer_details.examId', '=', 'lessons.id')
            ->select(
                'questions.answer as questionAnswer',
                'subjects.name as subjectName',
                'answer_details.answer as studentAnswer',
                'lessonName',
                'subjects.id as subjectId',
                'subjects.name as subjectName',
                'questions.title as questionTitle',
                'questions.content as questionContent',
                'questions.A as answerA',
                'questions.B as answerB',
                'questions.C as answerC',
                'questions.D as answerD',
                'answer_details.id as id',
                'answer_details.examId as examId',
            )
            ->get()
            ->groupBy('examId');
        return response()->json((object)[
            'message' => 'success',
            'data' => $records,
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
