@extends('plantilla.panel')

@section('container')
<h4>El libro que seleciones sera el top de la semana que aparece al inicio</h4>

<form>
  <div class="form-group">
                  <label for="email">Libro</label>
                  <select class="form-control" name="libro">
                    @foreach ($roles as $key => $value)
                        @if ($usuario->hasRole($value))
                            <option value="{{ $value }}" selected>{{ $value }}</option>
                        @else
                            <option value="{{ $value }}">{{ $value }}</option>
                        @endif
                    @endforeach

                  </select>
                </div>
                <div class="justify-content-end">
                  <input type="submit" value="Enviar" class="btn btn-success">
                </div>
</form>
@endsection
