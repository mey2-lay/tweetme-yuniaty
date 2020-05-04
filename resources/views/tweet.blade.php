@extends('layouts.master')

@section('content')
    <!-- <div class="row">
        <div class="col-md-7"> -->
            <form action="/tweet" method="POST" class="mb-5">
                @csrf

                <textarea name="tweet" id="tweet" class="form-control" rows="3" placeholder="Apa yang kamu pikirkan..."></textarea>
                <div class="text-right">
                    <button class="btn btn-primary mt-2 px-4 rounded-pill"><i class="fas fa-paper-plane"></i> Tweet</button>
                </div>
            </form>

            <h4>Latest Tweets</h4>
            <hr>
            
            @foreach($tweets as $tweet)
                <div class="media">
                    @if($tweet->user->avatar)
                        <img src="/storage/{{ $tweet->user->avatar }}" class="mr-3" style="width:40px">
                    @else
                        <img src="https://industrial.uii.ac.id/wp-content/uploads/2019/09/385-3856300_no-avatar-png.jpg" class="mr-3" style="width:40px">
                    @endif
                    <div class="media-body">
                        <h6 class="mt-0"><a href="/profile/{{ $tweet->user->username }}">{{ $tweet->user->name }}</a></h6>
                        {{ $tweet->content }}
                    </div>
                </div>
                <hr>
            @endforeach
        <!-- </div> -->

        <!-- <div class="col-md-5">
            <form class="form-inline mb-2">
            <input class="form-control" type="search" placeholder="Search Twitter" aria-label="Search">
            <button class="btn" type="submit"></button>
            </form>

            <h4>Who to Follow</h4>

            <footer class="text-secondary">
            2020 - TweetMe, Inc
            </footer>
        </div> -->
    <!-- </div> -->
@endsection