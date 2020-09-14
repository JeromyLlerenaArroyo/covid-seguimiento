@extends('layouts.app')

@section('route', $route)

@section('main_action')
<a href="{{ route('admin.institutions.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i>&nbsp;Volver</a>
@endsection

@section('content')
<form
class="form-row"
@switch($form_mode)
	@case(MODE_NEW)
		action="{{route('admin.institutions.create')}}"
	@break
	@case(MODE_EDIT)
		action="{{route('admin.institutions.edit', $institution->id)}}"
	@break
@endswitch
method="post"
enctype="multipart/form-data"
>
	@csrf
	<div class="col-md-8 offset-md-2">
		<div class="row">
			<x-text-input label="Nombre" id="name" col="6" :mode="$form_mode" :val="isset($institution) ? $institution->name : ''"/>
			<x-text-input label="Nombre Corto" id="short_name" col="6" :mode="$form_mode" :val="isset($institution) ? $institution->short_name : ''"/>
		</div>
		<div class="row">
			<x-file-input label="Logo" id="logo" col="6" :mode="$form_mode"/>
		</div>
		<div class="row">
			<x-submit-button col="3" :mode="$form_mode"/>
		</div>
	</div>
</form>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush