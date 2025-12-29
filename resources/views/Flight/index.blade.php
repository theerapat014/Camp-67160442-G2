@extends('template.default')
@section('header', 'Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/pokedex" method="POST">
                @csrf
                <div class="col-12">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="col-12">
                    <label for="airline">Airline:</label>
                    <input type="text" name="airline" id="airline">
                </div>
                <div class="col-12">
                    <label for="number_of_planes">Number of Planes:</label>
                    <input type="number" name="number_of_planes" id="number_of_planes">
                </div>
                <div class="col-12">
                    <label for="price_per_ticket">Price per Ticket:</label>
                    <input type="number" name="price_per_ticket" id="price_per_ticket">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @include('flight.table')
@endsection
