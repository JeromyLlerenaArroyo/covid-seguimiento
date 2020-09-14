<div class="col-md-{{ $col ? $col : 12 }}">
		<div class="row">
			<div class="col-md-8">
				<label class="form-check-label" for="name" >{{ $label }}</label>
			</div>
			<div class="col-md-1 form-check form-check-inline">
				<input class="form-check-input" type="radio" id="{{ $id }}" name="{{ $id }}" value="1">
				<label class="form-check-label" for="{{ $id }}">Si</label>
			</div>
			<div class="col-md-1 form-check form-check-inline">
				<input class="form-check-input" type="radio" id="{{ $id }}" name="{{ $id }}" value="0">
				<label class="form-check-label" for="{{ $id }}">No</label>
			</div>
		</div>
		<p class="text-danger small">
			@foreach($errors->get($id) as $error)
				{{$error}}
				@if(!$loop->last)
					<br>
				@endif
			@endforeach
		</p>
</div>