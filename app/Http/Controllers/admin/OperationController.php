<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Operation;
use App\Models\User;
use App\Models\Measure;
use App\Models\Question;
use App\Models\Tag;
use App\Models\SubTag;
use App\Models\Option;

class OperationController extends Controller
{
    // List all operations (simple example)
    public function index()
    {
        
        return view('admin.operations.operations');
    }

    public function form($id = null)
{
   
$inspectors=[];
    $measures = Measure::get(['id','name']);
    if ($id) {
        $operation = Operation::findOrFail($id);
        return view('operations.create', compact('operation'));
    }

    return view('admin.operations.create', compact('inspectors','measures'));
}
    // Show form to create a new operation
    public function create()
    {
        return view('admin.operations.create');
    }



public function list(Request $request)
{
    $columns = ['id', 'customer_name', 'customer_contact', 'type', 'status', 'scheduled_at'];

    $draw = intval($request->input('draw'));
    $start = intval($request->input('start'));
    $length = intval($request->input('length'));
    $search = $request->input('search.value');
    $orderColumnIndex = $request->input('order.0.column', 0);
    $orderDir = $request->input('order.0.dir', 'asc');

    $orderColumn = $columns[$orderColumnIndex] ?? 'id';

    $query = Operation::with(['installer', 'inspector']);

    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('customer_name', 'like', "%{$search}%")
              ->orWhere('customer_contact', 'like', "%{$search}%")
              ->orWhere('type', 'like', "%{$search}%")
              ->orWhere('status', 'like', "%{$search}%");
        });
    }

    $recordsTotal = Operation::count();
    $recordsFiltered = $query->count();

    $data = $query->orderBy($orderColumn, $orderDir)
                  ->skip($start)
                  ->take($length)
                  ->get();

    $result = $data->map(function ($operation) {
        return [
            'id' => $operation->id,
            'customer_name' => $operation->customer_name,
            'customer_contact' => $operation->customer_contact,
            'type' => $operation->type,
            'status' => $operation->status,
            'scheduled_at' => $operation->scheduled_at->format('Y-m-d H:i'),
            'installer' => $operation->installer ? $operation->installer->name : null,
            'inspector' => $operation->inspector ? $operation->inspector->name : null,
            'notes' => $operation->notes,
        ];
    });

    return response()->json([
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $result,
    ]);
}


    // Store new operation
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'required|string|max:500',
            'customer_contact' => 'required|string|max:100',
            'scheduled_at' => 'required|date',
            'type' => 'required|in:survey,inspection',
            'status' => 'required|in:pending,in_progress,completed,cancelled',
            'installer_id' => 'required|exists:users,id',
            'inspector_id' => 'required|exists:users,id',
            'notes' => 'nullable|string',
        ]);

        Operation::create($request->all());

        return redirect()->route('operations.index')->with('success', 'Operation created successfully.');
    }

    // Show a specific operation
    public function show(Operation $operation)
    {
        $operation->load(['installer', 'inspector']);
        return view('operations.show', compact('operation'));
    }

    // Show form to edit an operation
    public function edit(Operation $operation)
    {
        return view('operations.edit', compact('operation'));
    }

    // Update an operation
    public function update(Request $request, Operation $operation)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'required|string|max:500',
            'customer_contact' => 'required|string|max:100',
            'scheduled_at' => 'required|date',
            'type' => 'required|in:survey,inspection',
            'status' => 'required|in:pending,in_progress,completed,cancelled',
            'installer_id' => 'required|exists:users,id',
            'inspector_id' => 'required|exists:users,id',
            'notes' => 'nullable|string',
        ]);

        $operation->update($request->all());

        return redirect()->route('operations.index')->with('success', 'Operation updated successfully.');
    }

    // Delete an operation
    public function destroy(Operation $operation)
    {
        $operation->delete();
        return redirect()->route('operations.index')->with('success', 'Operation deleted successfully.');
    }

    public function getRelatedData(Request $request)
{
    $measureIds = $request->get('measures', []);
    $measuresData=Measure::with(['questions','subTags:id,name'])->whereIn('id',$measureIds)->get(['id','name','description']);
    $tags = Tag::with('options')->get(['id', 'name','haseoptions']);
    
    return response()->json([
        'measuresData' => $measuresData,
        'tags' => $tags
    ]);
}

public function getSubTags(Request $request)
{
    // fetch measure_id and tag_id from request
    $measureId = $request->get('measure_id'); 
    

    return response()->json(['subtags' => $subTags]);
}



}
