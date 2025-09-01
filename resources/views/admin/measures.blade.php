@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             <table id="measuresTable" class="table table-striped table-bordered table-sm table-responsive">

             </table>
            </div>
              <!-- End Table with stripped rows -->
            </div>
          </div>

        </div>
      </div>
      <script>
        $(document).ready(function(){
        let measuresTable = $('#measuresTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/measures-list', // Laravel route that returns JSON
        type: 'GET'
    },
    columns: [
        { title:'#', data: 'id'},
        { title:'Name', data: 'name'},
        { title:'Description', data: 'description'},
        { title:'Action', orderable: false, searchable: false, 
              render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-outline-danger delete-measure" data-id="${row.id}">
                            <i class="bi bi-trash"></i>
                        </button>
                    `;
                }
        }
    ],
    order: [[0, 'desc']]
});

        })
        $('#measuresTable').on('click', '.delete-measure', function() {
        let id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "This measure will be deleted permanently!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/measure/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message,
                                timer: 1500,
                                showConfirmButton: false
                            });
                            measuresTable.ajax.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Something went wrong while deleting the measure.'
                        });
                    }
                });
            }
        });
    });
      </script>
@endsection
