<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;   // ✅ make sure you import Question model
use App\Models\Measure;    // ✅ only if you want to show measure name

class QuestionController extends Controller
{
    public function index()
    {
        $measures = Measure::get(['id','name']);
        return view('admin.questions',compact('measures'));
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'measure_id' => 'required|integer',
            'type'       => 'required|string',
            'content'    => 'required|string',
        ]);

        $question = Question::updateOrCreate(
            ['id' => $request->id], // if id exists -> update, else create
            [
                'measure_id' => $request->measure_id,
                'type'       => $request->type,
                'content'    => $request->content,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => $request->id ? 'Question updated successfully.' : 'Question added successfully.',
            'data'    => $question
        ]);
    }

    public function list(Request $request)
{
    $columns = ['id', 'content', 'measure_id', 'type']; // ✅ match Question table

    $draw = intval($request->input('draw'));
    $start = intval($request->input('start'));
    $length = intval($request->input('length'));
    $search = $request->input('search.value');
    $orderColumnIndex = $request->input('order.0.column');
    $orderDir = $request->input('order.0.dir', 'asc');

    $orderColumn = $columns[$orderColumnIndex] ?? 'id';

    // ✅ Base query (with relation)
    $query = Question::with('measure');

    // ✅ Filtering
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('content', 'like', "%{$search}%")
              ->orWhere('type', 'like', "%{$search}%")
              ->orWhereHas('measure', function ($m) use ($search) {
                  $m->where('name', 'like', "%{$search}%");
              });
        });
    }

    $recordsFiltered = $query->count();
    $recordsTotal = Question::count(); // ✅ fix

    // ✅ Ordering
    if ($orderColumn === 'measure_id') {
        $query->join('measures', 'questions.measure_id', '=', 'measures.id')
              ->orderBy('measures.name', $orderDir) // ✅ use "name"
              ->select('questions.*')
              ->with('measure'); // ✅ keep relation
    } else {
        $query->orderBy($orderColumn, $orderDir);
    }

    // ✅ Pagination
    $data = $query->skip($start)->take($length)->get();

    // ✅ Format for DataTables
    $result = $data->map(function ($question) {
        return [
            'id' => $question->id,
            'content' => $question->content,
            'measure' => $question->measure->name ?? '',
            'type' => $question->type,
        ];
    });

    return response()->json([
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $result,
    ]);
}


    public function delete($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['success' => false, 'message' => 'Question not found.']);
        }

        $question->delete();

        return response()->json(['success' => true, 'message' => 'Question deleted successfully.']);
    }
}
