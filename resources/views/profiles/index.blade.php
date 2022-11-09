@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100 border border-dark">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

               <div class="d-flex align-items-center">
                   <h1>{{ $user->username }}</h1>

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
               </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            <div class="pr-2">
                @can('update',$user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                @endcan
            </div>
            <div class="d-flex">

                <div class="pr-2"><strong>{{ $postCount }}</strong> Posts</div>
                <div class="pr-2"><strong>{{ $followersCount }}</strong> Followers</div>
                <div class="pr-2"><strong>{{ $followingCount }}</strong> Following</div>
            </div>

            <div class="pt-2 font-weight-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                {{ $user->profile->url }}
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4 pb-2">
            <a href="/p/{{ $post->id }}">
                <img class="w-100" src="/storage/{{ $post->image }}">
            </a>
        </div>

        @endforeach

    </div>

</div>
@endsection
