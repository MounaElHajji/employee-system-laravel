@extends('layouts.main')

@section('content')
<div id="content-wrapper" class=" flex-colum">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white-800">Crrer Un Pays</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Ajouter Province') }}
                        <a href="{{ route('states.index') }}" class="float-right">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('states.update', $state->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __('Choisir Pays') }}</label>


                                <div class="col-md-6">
                                    <select name="country_id" class="form-control" aria-label="Default select example">
                                        <option>Choisir Pays</option>
                                       @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{ $country->id == $state->country_id ? 'selected' : '' }}>{{ $country->name}}</option>
                                       @endforeach
                                      </select>

                                    @error('country_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom Du Province') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $state->name) }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sauvgarder') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="m-2 p-2">
                        <form method="POST" action="{{ route('states.destroy', $state->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete {{ $state->name }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
