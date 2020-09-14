@extends('layouts.app')

@push('stylesheets')
  <!-- Custom styles for this page -->
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endpush

@section('route', $route)

@section('main_action')
<a href="{{route('admin.skills.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp;Nuevo</a>
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
                      <th>Nombre</th>
                      <th class="sm-width"></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th class="sm-width"></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($skills as $skill)
                    <tr>
                      <td>{{ $skill->id }}</td>
                      <td>{{ $skill->name }}</td>
                      <td>
                      	<x-table-actions
                      		:show="route('admin.skills.show', $skill->id)"
                      		:edit="route('admin.skills.edit', $skill->id)"
                      		:delete="route('admin.skills.delete', $skill->id)"
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