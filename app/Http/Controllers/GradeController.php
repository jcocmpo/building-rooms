<?php

namespace App\Http\Controllers;
use App\Models\grades;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        $grades = grades::get();
        return $grades;
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
        $fields = $request->validate([
            'user_id' => 'required|integer',
            'final_grade' => 'required|numeric',
            'final_point' => 'required|numeric',
            'term' => 'required|string',
            'year' => 'required|integer',
            'employee_id' => 'required|integer'
        ]);
    
           $grades = grades::create($fields);
           return $grades;
    }

    /**
     * Display the specified resource.
     */
    public function show(grades $grades)
    {
        return $grades;
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
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $fields = $request->validate([
            'user_id' => 'required|integer',
            'final_grade' => 'required|numeric',
            'final_point' => 'required|numeric',
            'term' => 'required|string',
            'year' => 'required|integer',
            'employee_id' => 'required|integer'
        ]);

       
        $grade = grades::find($id);

        if (!$grade) {
            return response()->json(['error' => 'Grade not found'], 404);
        }

        
        $grade->update($fields);

        return response()->json($grade);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $grade = grades::find($id);

        if (!$grade) {
            return response()->json(['error' => 'Grade not found'], 404);
        }

        $grade->delete();

       
        return response()->json(['message' => 'Grade has been deleted.']);
    }
}

