@extends('layouts.layouts')

@section('header')
@endsection

@section('main')
    <h1>New user</h1>
    <form action="/texts" method="post">
        <!-- csrf置かないとNo messageが出る-->
        {{ csrf_field() }}
        <p>text</p><br />
        <textarea data-uk-htmleditor="{markdown:true}" type="text" name="texts" value="{{ old('texts') }}"></textarea>
        <input type="submit" value="Create User">
    </form>
@endsection

@section('sidebar')
@endsection

@section('footer')
@endsection
