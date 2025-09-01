@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <div class="mb-3">
            <label for="" class="form-label">Measure</label>
            <select
                class="form-select form-select-sm"
                name=""
                id=""
            >
                <option selected>Select one</option>
                @foreach($measures as $measure)
                  <option value="{{ $measure?->id }}">{{ $measure?->name }}</option>
                @endforeach
            </select>
        </div>
        
    </div>
</div>
<div class="row" >
  <div class="col-lg-4">
    <div class="card">
    <div class="card-body pt-2">
        <strong>Tags</strong>
        <table class="table table-sm table-bordered table-striped" style="max: hieght 300px;">
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $tag?->id }}" id="" />
                        <label class="form-check-label" for=""> {{ $tag?->name }} </label>
                    </div>
                    </td>
                    <td>
                        
                        @if($tag?->haseoptions)
                         @foreach($tag?->options as $tp)
                         <span>{{$tp?->name}}</span><br>
                        @endforeach
                        @endif
                    </td>
                    
               
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
    </div>    
  </div>    
  <div class="col-lg-4">
    <div class="card">
    <div class="card-body pt-2">
        <strong>Sub Tags</strong>
        <table class="table table-sm table-bordered table-striped" style="max: hieght 300px;">
            <tbody>
                @foreach($subtags as $subtag)
                <tr>
                    
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $subtag?->id }}" id="" />
                        <label class="form-check-label" for=""> {{ $subtag?->name }} </label>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
    </div>    
  </div>    
  <div class="col-lg-4">
    <div class="card">
    <div class="card-body pt-2">
        <strong>Elements</strong>
        <table class="table table-sm table-bordered table-striped">
            <tbody>
                @foreach($elements as $element)
                <tr>
                    
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $element?->id }}" id="" />
                        <label class="form-check-label" for=""> {{ $element?->name }} </label>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
    </div>    
  </div>    
</div>    
@endsection