@extends('template.default')

@section('header1', 'Pokedex Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/pokedex" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="type">Type</label>
                        <input class="form-control" name="type" id="type" required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="species">Species</label>
                        <input class="form-control" name="species" id="species">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="height">Height</label>
                        <input class="form-control" name="height" id="height" step="0.1">
                    </div>
                    <div class="col-md-3 mb-2">
                        <label for="weight">Weight</label>
                        <input class="form-control" name="weight" id="weight" step="0.1">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="hp">HP</label>
                        <input type="number" class="form-control" name="hp" id="hp">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="attack">Attack</label>
                        <input type="number" class="form-control" name="attack" id="attack">
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="defense">Defense</label>
                        <input type="number" class="form-control" name="defense" id="defense">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="image_url">Image URL</label>
                        <input class="form-control" name="image_url" id="image_url">
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-primary" type="submit">บันทึกข้อมูลโปเกมอน</button>
                    </div>
                </div>
            </form>
        </div>

        @include('pokedexs.table')
    </div>
@endsection
