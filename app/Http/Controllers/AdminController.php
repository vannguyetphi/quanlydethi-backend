<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function auth(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = DB::table('admins')
            ->where('username', '=', $request->get('username'))
            ->first();
        if ($user) {
            $passCheck = Hash::check($request->get('password'), $user->password);
            if ($passCheck) {
                return response()->json((object)[
                    'message' => 'success',
                    'data' => $user,
                ]);
            }
        }

        return response()->json((object)[
            'message' => 'failed'
        ], 401);
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
