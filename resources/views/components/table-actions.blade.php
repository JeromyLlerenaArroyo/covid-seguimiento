<div class="dropdown no-arrow sm-width">
  <a class="dropdown-toggle" href="#" role="button" id="{{ $uid ?? '' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
  </a>
  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="{{ $uid ?? '' }}">
    <div class="dropdown-header">Acciones:</div>
    <a class="dropdown-item" href="{{ $show }}">Ver</a>
    <a class="dropdown-item" href="{{ $edit }}">Editar</a>
    <a class="dropdown-item" href="{{ $delete }}">Borrar</a>
    @if(count($extras))
    	@foreach($extras as $extra)
    		<a class="dropdown-item" href="{{ $extra->route }}">{{ $extra->name }}</a>
    	@endforeach
    @endif
  </div>
</div>