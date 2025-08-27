@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sub Tags</h2>
    <button class="btn btn-primary mb-2" id="addSubTagBtn">Add Sub Tag</button>
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                  <table class="table table-bordered" id="subTagsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th width="100">Action</th>
            </tr>
        </thead>
    </table>
            </div>
        </div>
    </div>
</div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="subTagModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="subTagForm">
            @csrf
            <input type="hidden" name="id" id="subTagId">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Tag</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" id="subTagName" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
$(function(){
    let table = $('#subTagsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route("subtags.list") }}',
        columns: [
            {data: 'id'},
            {data: 'name'},
            {data: null, render: function(data){
                return `
                    <button class="btn btn-sm btn-info editBtn" data-id="${data.id}" data-name="${data.name}">Edit</button>
                    <button class="btn btn-sm btn-danger deleteBtn" data-id="${data.id}">Delete</button>
                `;
            }}
        ]
    });

    $('#addSubTagBtn').click(function(){
        $('#subTagForm')[0].reset();
        $('#subTagId').val('');
        $('#subTagModal').modal('show');
    });

    $(document).on('click', '.editBtn', function(){
        $('#subTagId').val($(this).data('id'));
        $('#subTagName').val($(this).data('name'));
        $('#subTagModal').modal('show');
    });

    $('#subTagForm').submit(function(e){
        e.preventDefault();
        $.post('{{ route("subtags.store") }}', $(this).serialize(), function(){
            $('#subTagModal').modal('hide');
            table.ajax.reload();
        });
    });

    $(document).on('click', '.deleteBtn', function(){
        if(confirm('Delete this sub tag?')){
            $.ajax({
                url: '/subtags/' + $(this).data('id'),
                type: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function(){
                    table.ajax.reload();
                }
            });
        }
    });
});
</script>
@endsection
