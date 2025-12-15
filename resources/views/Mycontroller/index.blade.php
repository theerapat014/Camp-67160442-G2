@extends('template.default')
@section('title','index')
@section('content')
    <form action="#" method="POST">
        @csrf
        <label for="num">ป้อนแม่สูตรคูณ</label>
        <input type="number" class="form-control mb-3 w-25" placeholder="Input Number" id="num" name="num">
        <button class="btn btn-primary" type="submit">Summit</button>
    </form>
@endsection
