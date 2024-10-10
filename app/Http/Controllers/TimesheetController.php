<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    public function index()
    {
        return Timesheet::all();
    }

    public function show($id)
    {
        return Timesheet::findOrFail($id);
    }

    public function store(Request $request)
    {
        $timesheet = Timesheet::create($request->all());
        return response()->json($timesheet, 201);
    }

    public function update(Request $request)
    {
        $timesheet = Timesheet::findOrFail($request->id);
        $timesheet->update($request->all());
        return response()->json($timesheet, 200);
    }

    public function destroy(Request $request)
    {
        Timesheet::destroy($request->id);
        return response()->json(['message' => 'Timesheet deleted'], 204);
    }
}
