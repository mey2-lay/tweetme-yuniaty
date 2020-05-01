@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-7">
            @foreach($users as $user)
                @if(in_array($user->id, $followingIds))
                    <a href="/explore/{{ $user->id }}/unfollow" class="btn btn-danger btn-sm float-right">Unfollow</a>
                @else
                    <a href="/explore/{{ $user->id }}" class="btn btn-primary btn-sm float-right">Follow</a>
                @endif

                <div class="media">
                    @if($user->avatar)
                        <img src="/storage/{{ $user->avatar }}" class="mr-3" style="width:40px">
                    @else
                        <img src="https://industrial.uii.ac.id/wp-content/uploads/2019/09/385-3856300_no-avatar-png.jpg" class="mr-3" style="width:40px">
                    @endif
                    <div class="media-body">
                        <h6 class="mt-0"><a href="/profile/{{ $user->username }}">{{ $user->name }}</a></h6>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection