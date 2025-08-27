<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Measure;

class MeasureController extends Controller
{
    public function index() {
       return view('admin.measures'); 
    }



    public function list(Request $request)
{
    $columns = ['id', 'name', 'description']; // columns available in measures table

    $draw = intval($request->input('draw'));
    $start = intval($request->input('start'));
    $length = intval($request->input('length'));
    $search = $request->input('search.value');
    $orderColumnIndex = $request->input('order.0.column');
    $orderDir = $request->input('order.0.dir', 'asc');

    // Map DataTables column index to DB columns
    $orderColumn = $columns[$orderColumnIndex] ?? 'id';

    // Base query
    $query = Measure::query();

    // Filtering
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('description', 'like', "%{$search}%");
        });
    }

    $recordsFiltered = $query->count();
    $recordsTotal = Measure::count();

    // Ordering
    $query->orderBy($orderColumn, $orderDir);

    // Pagination
    $data = $query->skip($start)->take($length)->get();

 

    // Format data for DataTables
    $result = $data->map(function ($measure) {
        return [
            'id' => $measure->id,
            'name' => $measure->name,
            'description' => $measure->description,
        ];
    });

    return response()->json([
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $result,
    ]);
}

public function destroy($id)
{
    try {
        $measure = Measure::findOrFail($id);
        $measure->delete();

        return response()->json([
            'success' => true,
            'message' => 'Measure deleted successfully.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error deleting measure: ' . $e->getMessage()
        ], 500);
    }
}


}
