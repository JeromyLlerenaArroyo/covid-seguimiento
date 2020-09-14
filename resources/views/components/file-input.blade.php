<div class="form-group col-md-{{ $col ? $col : 12 }}">
		<label for="name" >{{ $label }}</label>
		<input class="form-control" type="file" id="{{ $id }}" name="{{ $id }}" {{ $mode == MODE_SHOW ? 'readonly' : '' }} {{$required ? 'required' : ''}}>
		<p class="text-danger small">
			@foreach($errors->get($id) as $error)
				{{$error}}
				@if(!$loop->last)
					<br>
				@endif
			@endforeach
		</p>
</div>