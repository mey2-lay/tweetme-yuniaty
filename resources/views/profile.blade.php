@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="twPc-div mb-5">
                <a class="twPc-bg twPc-block"></a>

                <div>
                    <div class="twPc-button">
                        @if($user->id == Auth::id())
                            <a href="/profile/edit" class="btn btn-primary btn-sm">Edit</a>
                        @else
                            @if(in_array($user->id, $followingIds))
                                <a href="/explore/{{ $user->id }}/unfollow" class="btn btn-danger btn-sm">Unfollow</a>
                            @else
                                <a href="/explore/{{ $user->id }}" class="btn btn-primary btn-sm">Follow</a>
                            @endif
                        @endif
                    </div>

                    <a href="#" class="twPc-avatarLink">
                        @if($user->avatar)
                            <img src="/storage/{{ $user->avatar }}" class="twPc-avatarImg">
                        @else
                            <img src="https://industrial.uii.ac.id/wp-content/uploads/2019/09/385-3856300_no-avatar-png.jpg" class="twPc-avatarImg">
                        @endif
                    </a>

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <a href="/profile/{{ $user->username }}">{{ $user->name }}</a>
                        </div>
                        <span>
                            <a href="/profile/{{ $user->username }}">@<span>{{ $user->username }}</span></a>
                        </span>
                    </div>

                    <div class="twPc-divStats">
                        <ul class="twPc-Arrange">
                            <li class="twPc-ArrangeSizeFit">
                                <a href="#" title="9.840 Tweet">
                                    <span class="twPc-StatLabel twPc-block">Tweets</span>
                                    <span class="twPc-StatValue">{{ $myTweet }}</span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="#" title="885 Following">
                                    <span class="twPc-StatLabel twPc-block">Following</span>
                                    <span class="twPc-StatValue">{{ $myFollowing }}</span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="#" title="1.810 Followers">
                                    <span class="twPc-StatLabel twPc-block">Followers</span>
                                    <span class="twPc-StatValue">{{ $myFollower }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            @foreach($tweets as $tweet)
                <div class="media">
                    @if($tweet->user->avatar)
                        <img src="/storage/{{ $tweet->user->avatar }}" class="mr-3" style="width:40px">
                    @else
                        <img src="https://industrial.uii.ac.id/wp-content/uploads/2019/09/385-3856300_no-avatar-png.jpg" class="mr-3" style="width:40px">
                    @endif
                    <div class="media-body">
                        <h6 class="mt-0">{{ $tweet->user->name }}</h6>
                        {{ $tweet->content }}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection