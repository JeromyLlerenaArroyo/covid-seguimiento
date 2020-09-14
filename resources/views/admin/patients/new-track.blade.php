@extends('layouts.app')

@section('route', $route)

@section('main_action')
<a href="{{ route('admin.patients.new-track', $patient) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i>&nbsp;Volver</a>
@endsection

@section('content')
<form
class="form-row"
@switch($form_mode)
  @case(MODE_NEW)
    action="{{ route('admin.patients.new-track', $patient) }}"
  @break
  @case(MODE_EDIT)
    action="#"
  @break
@endswitch
method="post"
enctype="multipart/form-data"
>
  @csrf
  <div class="col-md-8 offset-md-2">
      @foreach($details as $detail)
        <div class="row">
          <x-radio-input :label="$detail->question" :id="$detail->id" col="12" :mode="$form_mode" :val="''"/>
        </div>
      @endforeach
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