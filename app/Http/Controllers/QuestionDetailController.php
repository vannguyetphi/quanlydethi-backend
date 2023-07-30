<?php

namespace App\Http\Controllers;

use App\Models\QuestionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionDetailController extends Controller
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
        $data = QuestionDetail::create($request->all());
        return response()->json((object)[
            'message' => 'success',
            'data' => $data,
        ]);
    }

    public function getQuestionDetails(Request $request): \Illuminate\Http\JsonResponse
    {
        $subjects = DB::table('question_details')
            ->where('examId', '=', $request->get('examId'))
            ->join('questions', 'question_details.questionId', '=', 'questions.id')
            ->join('subjects', 'question_details.subjectId', '=', 'subjects.id')->get();
        return response()->json((object)[
            'message' => 'success',
            'total' => sizeof($subjects),
            'data' => $subjects,
        ]);
    }
    public function getExamSubjectQuestions(Request $request): \Illuminate\Http\JsonResponse
    {
        $questions = DB::table('question_details')
            ->where('examId', '=', $request->get('examId'))
            ->where('subjectId', '=', $request->get('subjectId'))
            ->join('questions', 'question_details.questionId', '=', 'questions.id')
            ->join('subjects', 'question_details.subjectId', '=', 'subjects.id')->get();
        return response()->json((object)[
            'message' => 'success',
            'total' => sizeof($questions),
            'data' => $questions,
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
