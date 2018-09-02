@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h2>Welcome, {{Auth::user()->name}} </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 pt-2">
            <div class="card">
                <div class="card-header">Your Posts</div>

                <div class="card-body">
                    @if(count('posts') > 0)
                        <table class="table ">
                            <thead>
                                <tr class="text-center">
                                    <th>Title</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                <td><h4>{{$post->title}}</h4></td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        No Post
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
