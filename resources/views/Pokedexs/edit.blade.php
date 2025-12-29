@extends('template.default')

@section('header1', 'Edit Pokedex')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            {{-- แก้จาก /pokedexs/ เป็น /pokedex/ (ไม่มี s) --}}
            <form action="/pokedex/{{ $pokedexs_update->id }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{ $pokedexs_update->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Type</label>
                        <input class="form-control" name="type" value="{{ $pokedexs_update->type }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Species</label>
                        <input class="form-control" name="species" value="{{ $pokedexs_update->species }}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Height</label>
                        <input class="form-control" name="height" value="{{ $pokedexs_update->height }}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label>Weight</label>
                        <input class="form-control" name="weight" value="{{ $pokedexs_update->weight }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>HP</label>
                        <input type="number" class="form-control" name="hp" value="{{ $pokedexs_update->hp }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Attack</label>
                        <input type="number" class="form-control" name="attack" value="{{ $pokedexs_update->attack }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Defense</label>
                        <input type="number" class="form-control" name="defense" value="{{ $pokedexs_update->defense }}">
                    </div>

                    <div class="col-12 mb-3">
                        <label>Image URL</label>
                        <input class="form-control" name="image_url" value="{{ $pokedexs_update->image_url }}">
                    </div>

                    <div class="col-12">
                        <button class="btn btn-success" type="submit">บันทึกการแก้ไข</button>
                        <a href="/pokedexs" class="btn btn-secondary">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
