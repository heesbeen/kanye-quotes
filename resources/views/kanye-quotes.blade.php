@extends('layouts.app')

@section('content')

<div id="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Kanye Quotes</h1>

            <ul class="list-group">
                @forelse  ($quotes as $quote)
                    <li class="list-group-item">{{ $quote }}</li>
                @empty
                    <li class="list-group-item list-group-item-warning">No quotes from Kanye</li>
                @endforelse
            </ul>

            <a class="btn btn-primary" href="">More</a>
        </div>
    </div>
</div>

@endsection
