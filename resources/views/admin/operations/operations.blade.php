@extends('layouts.app')

@section('content')
<div class=" d-flex justify-content-between mb-3">
    <h4>Operations</h4>
    <button class="btn btn-sm btn-primary">Add New</button>
</div>
<div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             <table id="operationsTable">

             </table>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
      <script>
        $(document).ready(function(){
        let operationsTable = $('#operationsTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/operations-list', // Laravel route that returns JSON
        type: 'GET'
    },
    columns: [
         { title: 'Customer Name', data: 'customer_name' },
        { title: 'Customer Contact', data: 'customer_contact' },
        { title: 'Type', data: 'type' },
        { title: 'Status', data: 'status' },
        { title: 'Scheduled At', data: 'scheduled_at' },
        { title: 'Installer', data: 'installer' },
        { title: 'Inspector', data: 'inspector' },
        { title:'Action', data: 'action', name: 'action', orderable: false, searchable: false }
    ],
    order: [[0, 'desc']]
});

        })
      </script>
@endsection
