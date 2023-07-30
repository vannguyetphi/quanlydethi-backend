<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = DB::table('lessons')
            ->join('admins', 'lessons.userCreatedId', '=', 'admins.id')
            ->select(array('answerTime', 'lessons.created_at', 'lessonName', 'name', 'lessons.updated_at', 'userCreatedId', 'username', 'admins.id as adminId', 'lessons.id'))
            ->get();
        return response()->json($lessons);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->all();
        $data['created_at'] = date("Y-m-d H:i:s");
        $data['updated_at'] = date("Y-m-d H:i:s");
        DB::table('lessons')->insert($data);
        return response()->json((object)[
            'message' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $lesson = Lessons::find($id);
        if (!$lesson) {
            return response()->json((object)[
                'message' => 'failed',
            ], 404);
        }
        return response()->json((object)[
            'message' => 'success',
            'data' => $lesson,
        ]);
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
