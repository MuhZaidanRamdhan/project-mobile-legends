@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Roles Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Roles</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Roles Data
        </div>
        <div class="card-body">
            <form method="POST" action="/roles/{{ $role->id }}">
                @csrf
                @method('put')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">name </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="name" value="{{ $role->name }}">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Description </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="description" value="{{ $role->description }}">
                    </div>
                  </div>
                  <input type="submit" value="Update Roles" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection