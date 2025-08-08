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
            let usersTables = $('#usersTables');
        })
      </script>
@endsection
