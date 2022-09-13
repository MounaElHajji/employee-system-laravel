@extends('layouts.main')

@section('content')
<div id="content-wrapper" class=" flex-colum">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white-800">Pays</h1>
    </div>
    <div class="card mx-auto">
        <div>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>

        <div class="card-header">
            <a href="{{ route('cities.create') }}" class="float-right">Create</a>
            <form method="GET" action="{{ route('cities.index') }}">
                <div class="form-row align-items-center">

                  <div class="col-auto">
                    <input type="text" class="form-control mb-2" placeholder="search" name="search">
                  </div>

                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                  </div>

                </div>
            </form>

        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#Id</th>
                    <th scope="col">Nom Du Province</th>
                    <th scope="col">Nom Du Ville</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($cities as $city)
                    <tr>
                        <th scope="row">{{ $city->id }}</th>
                        <td>{{ $city->state->name }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-success">Modifier</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
