<?php

namespace App\Http\Controllers;
use App\Models\activity_grades;
use Illuminate\Http\Request;

class ActGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = activity_grades::get();
        return $type;
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
        // Validate the incoming request data
        $fields = $request->validate([
            'percentage' => 'required|numeric|min:0|max:100',  
            'grade_acquired' => 'required|string',             
            'activity_type' => 'required|string',              
            'grade_id' => 'required|integer', 
            'activity_id' => 'required|integer' 
        ]);
        
        
        $type = activity_grades::create($fields);
        return $type;
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(activity_grades $type)
    {
        return $type;
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
            'percentage' => 'required|numeric|min:0|max:100',  
            'grade_acquired' => 'required|string',             
            'activity_type' => 'required|string',              
            'grade_id' => 'required|integer', 
            'activity_id' => 'required|integer' 
        ]);

       
        $type = activity_grades::find($id);

        if (!$type) {
            return response()->json(['error' => 'Grade not found'], 404);
        }

        
        $type->update($fields);

        return response()->json($type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $type = activity_grades::find($id);

        if (!$type) {
            return response()->json(['error' => 'Grade not found'], 404);
        }

        $type->delete();

       
        return response()->json(['message' => 'Grade has been deleted.']);
    }
}
