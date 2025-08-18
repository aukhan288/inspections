@extends('layouts.app')

<h2>{{ isset($operation) ? 'Edit Operation' : 'Add Operation' }}</h2>
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="container card p-3">

    <form action="{{ isset($operation) ? route('operations.update', $operation->id) : route('operations.store') }}" method="POST">
        @csrf
        @if(isset($operation))
            @method('PUT')
        @endif
        <div class="row">
            <div class="col-sm-6">
 <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control"
                value="{{ old('customer_name', $operation->customer_name ?? '') }}" required>
            @error('customer_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            </div>
            <div class="col-sm-6">
     <div class="mb-3">
            <label for="customer_contact" class="form-label">Customer Contact</label>
            <input type="text" name="customer_contact" id="customer_contact" class="form-control"
                value="{{ old('customer_contact', $operation->customer_contact ?? '') }}" required>
            @error('customer_contact')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            </div>
        </div>
       

        {{-- Customer Address --}}
        <div class="mb-3">
            <label for="customer_address" class="form-label">Customer Address</label>
            <input type="text" name="customer_address" id="customer_address" class="form-control"
                value="{{ old('customer_address', $operation->customer_address ?? '') }}" required>
            @error('customer_address')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
      <label for="scheduled_at" class="form-label">Scheduled At</label>
            <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="form-control"
                value="{{ old('scheduled_at', isset($operation) ? $operation->scheduled_at->format('Y-m-d\TH:i') : '') }}" required>
            @error('scheduled_at')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
            </div>
      <div class="col-sm-3">
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <select name="type" id="type" class="form-select" required>
            <option value="">Select Type</option>
            <option value="2" {{ old('type', $operation->type ?? '') == 'survey' ? 'selected' : '' }}>Survey</option>
            <option value="3" {{ old('type', $operation->type ?? '') == 'inspection' ? 'selected' : '' }}>Inspection</option>
        </select>
        @error('type')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

{{-- Hidden User field --}}
<div class="col-sm-3" id="personField" style="display: none;">
    <div class="mb-3">
        <label for="person" class="form-label" id="personLabel"></label>
        <select name="person" id="person" class="form-select select2"></select>
        @error('person')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


        </div>

        {{-- Notes --}}
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control" rows="4">{{ old('notes', $operation->notes ?? '') }}</textarea>
            @error('notes')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Measures</label>
            <select
                multiple
                class="form-select form-select-lg"
                name="measures"
                id="measures"
            >
                <option >Select</option>
                 @foreach($measures as $measure)
                 <option value="{{ $measure->id }}">{{ $measure->name }}</option>
                 @endforeach
            </select>
        </div>
        <div id="measuresDetails"></div>
        {{-- Buttons --}}
        <button type="submit" class="btn btn-primary">{{ isset($operation) ? 'Update' : 'Add' }}</button>
        <a href="{{ route('operations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>


<script>


let allTags = []; // global variable

$(document).ready(function () {
    let measuresSelect = $('#measures').select2({
        placeholder: 'Select Measure'
    });

    $(measuresSelect).on('change', function () {
        let selectedMeasures = $(this).val();

        $.ajax({
            url: '{{ route("measures.relatedData") }}',
            type: 'GET',
            data: { measures: selectedMeasures },
            success: function (data) {
                // store tags globally for other event handlers
                allTags = data.tags || [];

                $('#measuresDetails').empty();

                let html = `<div class="accordion" id="accordionExample">`;

                data.measuresData.forEach((measure, index) => {
                    html += `
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading${index}">
                            <button class="accordion-button ${index !== 0 ? 'collapsed' : ''}" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse${index}" 
                                    aria-expanded="${index === 0 ? 'true' : 'false'}" 
                                    aria-controls="collapse${index}">
                                ${measure.name}
                            </button>
                        </h2>
                        <div id="collapse${index}" 
                             class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" 
                             aria-labelledby="heading${index}" 
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>${measure.description ?? ''}</p>

                                <div class="row">
                                  <!-- Tags dropdown -->
                                  <div class="col-sm-4">
                                    <div class="mb-3">
                                      <label class="form-label">Tags</label>
                                      <select id="tag-${index}" 
                                              class="form-select form-select-sm tag-select" 
                                              data-index="${index}">
                                        <option value="">Select Tag</option>
                                        ${allTags.map(tag => {
                                            const optionsJson = encodeURIComponent(JSON.stringify(tag.options || []));
                                            return `<option value="${tag.id}" 
                                                            data-hasoptions="${tag.haseoptions}" 
                                                            data-measure="${measure.id}" 
                                                            data-options="${optionsJson}">
                                                        ${tag.name}
                                                    </option>`;
                                        }).join('')}
                                      </select>
                                    </div>
                                  </div>

                                  <!-- Options container -->
                                  <div class="col-sm-4">
                                    <div class="mb-3" id="optionDiv-${index}"></div>
                                  </div>

                                  <!-- Sub Tags container -->
                                  <div class="col-sm-4">
                                    <div class="mb-3" id="subTagDiv-${index}"></div>
                                  </div>
                                </div>
${(measure?.questions || []).map((q, i) => {
    return `
        <div class="form-check">
            <input class="form-check-input" type="checkbox" 
                   id="measure-${index}-q-${i}" 
                   value="${q.id}">
            <label class="form-check-label" for="measure-${index}-q-${i}">
                <strong>Q ${i + 1}:</strong> ${q?.content ?? ''}
            </label>
        </div>
    `;
}).join('')}



                            </div>
                        </div>
                    </div>`;
                });

                html += `</div>`;
                $('#measuresDetails').html(html);
            }
        });
    });

    // person select2 init...
});

    let personSelect = $('#person').select2({
        placeholder: 'Select Person',
        ajax: {
            url: '{{ route("users.byRole") }}',
            dataType: 'json',
            delay: 250,
            data: function () {
                return {
                    role_id: $('#type').val() // send role ID
                };
            },
            processResults: function (data) {
                return {
                    results: data.map(function (item) {
                        return { id: item.id, text: item.name }
                    })
                };
            },
            cache: true
        }
    });

    $('#type').on('change', function () {
        $('#person').val(null).trigger('change'); // clear old selection

        let roleId = $(this).val();
        if (roleId == 2) {
            $('#personLabel').text('Select Surveyor');
            $('#personField').show();
        } 
        else if (roleId == 3) {
            $('#personLabel').text('Select Inspector');
            $('#personField').show();
        } 
        else {
            $('#personField').hide();
        }
    });

    $('#type').trigger('change'); // for edit mode


$(document).on('change', '.tag-select', function () {
    let index = $(this).data('index');
    let tagId = $(this).val();
    let hasOptions = $(this).find(':selected').data('hasoptions') == 1;
    let measureId = $(this).find(':selected').data('measure');

    // Assuming you already store the selected measure somewhere
    // change if your measure input has a different ID

    // Clear existing options/subtags
    $(`#optionDiv-${index}`).empty();
    $(`#subTagDiv-${index}`).empty();

    // --- Handle Options (existing functionality) ---
    if (tagId && hasOptions) {
        let selectedTag = allTags.find(tag => tag.id == tagId);

        if (selectedTag && selectedTag.options && selectedTag.options.length) {
            let optionHtml = `
                <label class="form-label">Options</label>
                <select class="form-select form-select-sm option-select" data-index="${index}">
                    <option value="">Select Option</option>
                    ${selectedTag.options.map(opt => 
                        `<option value="${opt.id}">${opt.name}</option>`
                    ).join('')}
                </select>
            `;
            $(`#optionDiv-${index}`).html(optionHtml);
        }
    }

    // --- Handle SubTags (new functionality) ---
    // if (tagId && measureId) {
        $.ajax({
            url: '/get-sub-tags', // adjust to your route
            type: 'GET',
            data: { measure_id: measureId, tag_id: tagId },
            success: function (response) {
                if (response.subtags && response.subtags.length) {
                    let subTagHtml = `
                        <label class="form-label">Sub Tags</label>
                        <select class="form-select form-select-sm subtag-select" data-index="${index}">
                            <option value="">Select Sub Tag</option>
                            ${response.subtags.map(sub => 
                                `<option value="${sub.id}">${sub.name}</option>`
                            ).join('')}
                        </select>
                    `;
                    $(`#subTagDiv-${index}`).html(subTagHtml);
                }
            },
            error: function () {
                console.error('Failed to fetch subtags');
            }
        });
    // }
});



// Dynamic SubTag + Options loading when a tag is selected


function optionChange(selectEl, index) {
    const optionId = $(selectEl).val();
    console.log(`Option selected in measure ${index}:`, optionId);
}

</script>


@endsection
