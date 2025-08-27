<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubTag;

class SubTagController extends Controller
{
    public function index()
    {
        return view('admin.subtags');
    }

    public function list(Request $request)
    {
        $columns = ['id', 'name'];

        $draw = intval($request->input('draw'));
        $start = intval($request->input('start'));
        $length = intval($request->input('length'));
        $search = $request->input('search.value');
        $orderColumnIndex = $request->input('order.0.column');
        $orderDir = $request->input('order.0.dir', 'asc');

        $orderColumn = $columns[$orderColumnIndex] ?? 'id';

        $query = SubTag::query();

        if (!empty($search)) {
            $query->where('name', 'like', "%{$search}%");
        }

        $recordsFiltered = $query->count();
        $recordsTotal = SubTag::count();

        $query->orderBy($orderColumn, $orderDir);

        $data = $query->skip($start)->take($length)->get();

        $result = $data->map(function ($subtag) {
            return [
                'id'   => $subtag->id,
                'name' => $subtag->name,
            ];
        });

        return response()->json([
            'draw' => $draw,
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $result,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        SubTag::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        SubTag::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
