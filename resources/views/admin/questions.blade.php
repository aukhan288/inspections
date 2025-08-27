@extends('layouts.app')

@section('content')
<div class="mb-3 d-flex justify-content-between align-items-center">
    <h4>Questions</h4>
    <button type="button" class="btn btn-primary btn-sm" onclick="openQuestionModal()">Add New</button>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="questionsTable" class="table table-bordered table-striped w-100"></table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Body -->
<div
    class="modal fade"
    id="questionModalId"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <form id="questionForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Question Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" id="question_id">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Measure</label>
                                <select class="form-select" name="measure_id" id="measure_id" required>
                                    <option value="">Select one</option>
                                    @foreach($measures as $measure)
                                        <option value="{{ $measure?->id }}">{{ $measure?->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Type</label>
                                <select class="form-select" name="type" id="type" required>
                                    <option value="">Select one</option>
                                    <option value="boolean">boolean</option>
                                    <option value="Yes/No">Yes/No</option>
                                    <option value="text">text</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="3" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveQuestionBtn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

    // ✅ DataTable
    let questionsTable = $('#questionsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/questions-list',
            type: 'GET'
        },
        columns: [
            { title: '#', data: 'id' },
            { title: 'Content', data: 'content' },
            { title: 'Measure', data: 'measure' },
            { title: 'Type', data: 'type' },
            { 
                title:'Action',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-outline-danger delete-question" data-id="${row.id}">
                            <i class="bi bi-trash"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-info edit-question" data-row='${JSON.stringify(row)}'>
                            <i class="bi bi-pencil"></i>
                        </button>
                    `;
                }
            }
        ],
        order: [[0, 'desc']]
    });

    // ✅ Open Modal for Edit
    $(document).on('click', '.edit-question', function() {
        let row = $(this).data('row');
        openQuestionModal(row);
    });

    // ✅ Delete Question
    $('#questionsTable').on('click', '.delete-question', function() {
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
                    url: `/questions/${id}`,
                    type: 'DELETE',
                    data: { _token: '{{ csrf_token() }}' },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Deleted!', response.message, 'success');
                            questionsTable.ajax.reload(null, false);
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
  $('#questionForm').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: `/questions/save`,
        type: 'POST',
        data: $(this).serialize() + "&_token={{ csrf_token() }}",
        success: function(response) {
            if (response.success) {
                $('#questionModalId').modal('hide');
                Swal.fire('Success!', response.message, 'success');
                questionsTable.ajax.reload(null, false);
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
function openQuestionModal(row = null) {
    $('#questionForm')[0].reset();
    $('#question_id').val('');

    if (row && row.id) {
        $('#modalTitleId').text('Edit Question');
        $('#question_id').val(row.id);
        $('#measure_id').val(row.measure_id);
        $('#type').val(row.type);
        $('#content').val(row.content);
    } else {
        $('#modalTitleId').text('Add New Question');
    }

    new bootstrap.Modal(document.getElementById("questionModalId")).show();
}
</script>
@endsection
