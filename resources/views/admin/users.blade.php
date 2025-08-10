@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             <table id="usersTable">

             </table>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
      <script>
        $(document).ready(function(){
        let usersTable = $('#usersTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/users-list', // Laravel route that returns JSON
        type: 'GET'
    },
    columns: [
        { title:'Name', data: 'name'},
        { title:'Email', data: 'email'},
        { title:'Role', data: 'role'},
        { title:'Action', data: 'action', name: 'action', orderable: false, searchable: false }
    ],
    order: [[0, 'desc']]
});

        })
      </script>
@endsection
