<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Measure;  
use App\Models\Tag;  

class TagController extends Controller
{
    public function index(){
        $measures = Measure::get(['id','name']);
        return view('admin.tags',compact('measures'));
    }

    public function list(Request $request)
{
    $columns = ['id', 'name', 'hasoptions']; // ✅ match Tag table

    $draw = intval($request->input('draw'));
    $start = intval($request->input('start'));
    $length = intval($request->input('length'));
    $search = $request->input('search.value');
    $orderColumnIndex = $request->input('order.0.column');
    $orderDir = $request->input('order.0.dir', 'asc');

    $orderColumn = $columns[$orderColumnIndex] ?? 'id';

    // ✅ Base query
    $query = Tag::query();

    // ✅ Filtering
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('hasoptions', 'like', "%{$search}%");
        });
    }

    $recordsFiltered = $query->count();
    $recordsTotal = Tag::count();

    // ✅ Ordering
    $query->orderBy($orderColumn, $orderDir);

    // ✅ Pagination
    $data = $query->skip($start)->take($length)->get();

    // ✅ Format for DataTables
    $result = $data->map(function ($tag) {
        return [
            'id'         => $tag->id,
            'name'       => $tag->name,
            'hasoptions' => $tag->haseoptions ? 'Yes' : 'No',
        ];
    });

    return response()->json([
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $result,
    ]);
}

}
