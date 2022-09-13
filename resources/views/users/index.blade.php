@extends('layouts.main')

@section('content')
<div id="content-wrapper" class=" flex-colum">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 text-white-800">Utilisateurs</h1>
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
            <a href="{{ route('users.create') }}" class="float-right">Create</a>
            <form method="GET" action="{{ route('users.index') }}">
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
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Email</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Modifier</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
