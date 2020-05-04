@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <form action="/profile/edit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <input type="text" name="bio" class="form-control" value="{{ $user->bio }}">
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cover">Cover</label>
                    <input type="file" name="cover" class="form-control">
                </div>

                <button class="btn btn-primary px-5 mt-3">Save</button>
            </form>
        </div>
    </div>
@endsection