@extends('layouts.app')

@section('content')
<div class="mb-3 d-flex justify-content-between align-items-center">
    <h4>Tags</h4>
    <button type="button" class="btn btn-primary btn-sm" onclick="openTagModal()">Add New</button>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="tagsTable" class="table table-bordered table-striped w-100"></table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Body -->
<div class="modal fade" id="tagModalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md">
        <div class="modal-content">
            <form id="tagForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Tag Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" id="tag_id">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Has Options</label>
                        <select class="form-select" name="hasoptions" id="hasoptions" required>
                            <option value="">Select one</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveTagBtn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

    // ✅ DataTable
    let tagsTable = $('#tagsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/tags-list',
            type: 'GET'
        },
        columns: [
            { title: '#', data: 'id' },
            { title: 'Name', data: 'name' },
            { title: 'Has Options', data: 'hasoptions' },
            { 
                title:'Action',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-outline-danger delete-tag" data-id="${row.id}">
                            <i class="bi bi-trash"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-info edit-tag" data-row='${JSON.stringify(row)}'>
                            <i class="bi bi-pencil"></i>
                        </button>
                    `;
                }
            }
        ],
        order: [[0, 'desc']]
    });

    // ✅ Open Modal for Edit
    $(document).on('click', '.edit-tag', function() {
        let row = $(this).data('row');
        openTagModal(row);
    });

    // ✅ Delete Tag
    $('#tagsTable').on('click', '.delete-tag', function() {
        let id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: "This record will be deleted permanently!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `/tags/${id}`,
                    type: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Deleted!', response.message, 'success');
                            tagsTable.ajax.reload(null, false);
                        } else {
                            Swal.fire('Error!', response.message, 'error');
                        }
                    },
                    error: function() {
                        Swal.fire('Error!', 'Something went wrong.', 'error');
                    }
                });
            }
        });
    });

    // ✅ Save (Add/Update)
    $('#tagForm').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: `/tags/save`,
            type: 'POST',
            data: $(this).serialize() + "&_token={{ csrf_token() }}",
            success: function(response) {
                if (response.success) {
                    $('#tagModalId').modal('hide');
                    Swal.fire('Success!', response.message, 'success');
                    tagsTable.ajax.reload(null, false);
                } else {
                    Swal.fire('Error!', response.message, 'error');
                }
            },
            error: function(xhr) {
                Swal.fire('Error!', 'Validation failed or server error.', 'error');
            }
        });
    });

});

// ✅ Function to open modal (Add or Edit)
function openTagModal(row = null) {
    $('#tagForm')[0].reset();
    $('#tag_id').val('');

    if (row && row.id) {
        $('#modalTitleId').text('Edit Tag');
        $('#tag_id').val(row.id);
        $('#name').val(row.name);
        $('#hasoptions').val(row.hasoptions === 'Yes' ? 1 : 0);
    } else {
        $('#modalTitleId').text('Add New Tag');
    }

    new bootstrap.Modal(document.getElementById("tagModalId")).show();
}
</script>
@endsection
