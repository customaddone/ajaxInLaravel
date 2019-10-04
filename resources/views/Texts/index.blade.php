@extends('layouts.layouts')

@section('main')
    <h1>Listing users</h1>
        @foreach ( $items as $item )
            <tr>
                <td>{{ $item->texts }}</td>
                <td><a href="/texts/{{ $item->id }}" style="display: inline-block;">
                    Show</a></td>
                <td><a href="/texts/{{ $item->id}}/edit" style="display: inline-block;">
                    Edit</a></td>
                <form action="/texts/{{ $item->id }}" id="form_{{ $item->id }}"
                    method="post" style="display:inline">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                <td><a href="#" data-id="{{ $item->id }}" onclick="deletePost(this);">Destroy</a></td>
                </form>
                <script>
                    function deletePost(e) {
                        'use strict';
                        if (confirm('are you sure?')) {
                            document.getElementById('form_' + e.dataset.id).submit();
                        }
                    }
                </script>
            </tr>
            <br />
        @endforeach
    <br />
    <a href="/texts/create">New User</a>
@endsection

@section('sidebar')
@endsection

@section('footer')
@endsection
