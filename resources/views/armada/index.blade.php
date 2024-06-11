@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Armada</h6>
              <a href="/armada/create" class="btn btn-primary float-end">Add</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Max_weight</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Length</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Width</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Height</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($armadas as $armada)
                    <tr>
                     <td>{{ $armada->name }}</td>
                     <td>{{ $armada->max_weight }}</td>
                     <td>{{ $armada->length }}</td>
                     <td>{{ $armada->width }}</td>
                     <td>{{ $armada->height }}</td>
                     <td>
                      <a href="/armada/{{ $armada->id }}/edit" class="btn btn-warning">Edit</a>
                      <form action="/armada/{{ $armada->id }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                     </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection