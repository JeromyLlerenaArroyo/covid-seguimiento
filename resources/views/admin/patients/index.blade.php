@extends('layouts.app')

@push('stylesheets')
  <!-- Custom styles for this page -->
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('route', $route)

@section('main_action')
<!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Nuevo</a>-->
@endsection

@section('content')
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>DNI</th>
                      <th class="sm-width"></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>DNI</th>
                      <th class="sm-width"></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($patients as $patient)
                    <tr>
                      <td>{{ $patient->id }}</td>
                      <td>{{ $patient->person->first_name }}</td>
                      <td>{{ $patient->person->last_name }}</td>
                      <td>{{ $patient->person->dni }}</td>
                      <td>
                      	<x-table-actions
                      		:show="'#'"
                      		:edit="'#'"
                      		:delete="'#'"
                          :extras="[
                            (object)['route' => route('admin.patients.track', $patient->id), 'name' => 'Seguimiento'],
                          ]"
                      	/>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection

@push('scripts')
  <!-- Page level plugins -->
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script>
	// Call the dataTables jQuery plugin
	$(document).ready(function() {
	  $('#dataTable').DataTable();
	});
  </script>
@endpush