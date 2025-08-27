<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;


class UserController extends Controller
{
    function index(Request $request) {
        return view('admin.users');
    }

  public function list(Request $request)
{
    $columns = ['id', 'name', 'email', 'role.name']; // role.name for ordering/searching

    $draw = intval($request->input('draw'));
    $start = intval($request->input('start'));
    $length = intval($request->input('length'));
    $search = $request->input('search.value');
    $orderColumnIndex = $request->input('order.0.column');
    $orderDir = $request->input('order.0.dir', 'asc');

    // Map DataTables column index to DB columns, including relation
    $orderColumn = $columns[$orderColumnIndex] ?? 'id';

    // Base query with eager loading role
    $query = User::with('role');

    // Filtering
    if (!empty($search)) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%")
              ->orWhereHas('role', function($qr) use ($search) {
                  $qr->where('name', 'like', "%{$search}%");
              });
        });
    }

    $recordsFiltered = $query->count();
    $recordsTotal = User::count();

    // Order by handling relation column safely
    if ($orderColumn === 'role.name') {
        // Sort users by role name
        $query->join('roles', 'users.role_id', '=', 'roles.id')
              ->orderBy('roles.name', $orderDir)
              ->select('users.*');
    } else {
        $query->orderBy($orderColumn, $orderDir);
    }

    // Pagination
    $data = $query->skip($start)->take($length)->get();

    // Add action buttons
    $data->transform(function ($item) {
        $item->action = '<button class="btn btn-sm btn-primary">Edit</button>';
        return $item;
    });

    // Format data for DataTables
    $result = $data->map(function($user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role->name ?? '',
            'action' => $user->action,
        ];
    });

    return response()->json([
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $result,
    ]);
}



public function getUsersByRole(Request $request)
{
    $roleId = $request->get('role_id');

    if (!$roleId) {
        return response()->json([]);
    }

    return response()->json(
        User::where('role_id', $roleId)->get(['id', 'name'])
    );
}


}
