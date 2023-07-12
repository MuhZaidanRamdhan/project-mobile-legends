@extends('layouts.landing')

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-lg-9">
            <div class="shadow rounded-2">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="bg-register h-100 rounded"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5 ps-4 text-dark">
                            <h5 class="mb-1 fw-bold">Favorite Heroes!</h5>
                            <p class="mb-4 text-muted">Please select your Favorite Heroes!</p>
                            <form action="/favorit" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col">
                                    <label for="user">User</label>
                                    <select name="user_id" id="user" class="form-select">
                                    <option value="{{$publics->id}}">{{$publics->name}}</option>
                                </select>
                                    </div>
                                  </div>

                                  <div class="mb-3">
                                    <label for="hero" class="form-label">Heroes</label>
                                    <select name="hero_id" id="hero" class="form-select">
                                    @foreach ($heroes as $hero)
                                    <option value="{{$hero->id}}">{{$hero->name}}</option>
                                    @endforeach
                                    </select>
                                  </div>

                                <div class="mb-3">
                                    <div class="col">
                                        <label for="password" class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" id="date" required>
                                    </div>
                                </div>
                                  
                                <div class="col">
                                    <label for="note" class="form-label">Notes</label>
                                    <input type="text" class="form-control" id="notes" name="notes" required>
                                </div>
                                <div class="col">
                                    <label for="note" class="form-label">rating</label>
                                    <input type="text" class="form-control" id="rating" name="rating" required>
                                </div>
                                            
                                <div class="d-grid mb-3 mt-3">
                                    <button type="submit" class="btn btn-primary py-2">Add</button>
                                </div>
                            </form>
                            
                            <p class="text-muted fz-13 text-center"><a href="/favorit" style="text-decoration: none;">Back To Favorite</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection