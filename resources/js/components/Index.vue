<template>
        <div class="card mx-auto">
        <div>

        </div>

        <div class="card-header">
            <a href="{{ route('countries.create') }}" class="float-right">Create</a>
            <form method="GET" action="{{ route('countries.index') }}">
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
                    <th scope="col">Code du Pays</th>
                    <th scope="col">Nom Du Pays</th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="" class="btn btn-success">Modifier</a>
                        </td>
                    </tr>
                </tbody>
              </table>
        </div>
        </div>
</template>
