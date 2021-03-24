@extends('layouts.base')

@section('title', 'Add guitar')

@section('content')

  <form action="{{route('guitar.store')}}" method="POST">
  	@csrf
  	@method('POST')
  	<div class="form-group">
  	  <label for="brand">Brand</label>
  	  <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" placeholder="insert brand" value="">
  	  <div class="invalid-feedback">
  		{{ $errors->first('brand') }}
  	  </div>
  	</div>
  	<div class="form-group">
  	  <label for="model">Model</label>
  	  <input class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" type="text" name="model" placeholder="insert model" value="">
  	  <div class="invalid-feedback">
  		{{ $errors->first('model') }}
  	  </div>
  	</div>
  	<div class="form-group">
  	  <label for="type">Type</label>
  	  <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" placeholder="insert type" value="">
  	  <div class="invalid-feedback">
  		{{ $errors->first('type') }}
  	  </div>
  	</div>
  	<div class="form-group">
  	  <label for="price">Price</label>
  	  <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" placeholder="insert price" value="">
  	  <div class="invalid-feedback">
  		{{ $errors->first('price') }}
  	  </div>
  	</div>
  	<div class="form-group">
  	  <label for="image">Image</label>
  	  <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="text" name="image" placeholder="insert image" value="">
  	  <div class="invalid-feedback">
  		{{ $errors->first('image') }}
  	  </div>
  	</div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>

@endsection
