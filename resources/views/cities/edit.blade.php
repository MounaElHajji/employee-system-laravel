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
                    <div class="card-header">{{ __('Modifier la Ville') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('cities.update', $city->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="country_code" class="col-md-4 col-form-label text-md-end">{{ __('Nom Du Province') }}</label>

                                <div class="col-md-6">
                                    <select name="state_id" class="form-select" aria-label="Default select example">
                                        <option selected>Choisir une Province</option>
                                            @foreach ($states as $state)
                                            <option value="{{$state->id}}" {{ $state->id == $city->state_id ? 'selected' : '' }}>{{$state->name}}</option>
                                            @endforeach
                                      </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom Du Ville') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $city->name) }}" required autocomplete="name" autofocus>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
