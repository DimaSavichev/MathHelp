@extends("layouts.main")

@section("heading","Площадь треугольника")

@section("description","Вычисляет площадь треугольника по трём его сторонам")

@section("answer")
    @if ($r != "")
        {{$r*pi()}}
    @endif
@endsection

@section("form")
    <form>
        @csrf
        <input type="text" name="r" value="{{ $r }}"/>
        <input type="submit">
    </form>
@endsection

