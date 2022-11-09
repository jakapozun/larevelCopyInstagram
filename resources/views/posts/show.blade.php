@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-8 border border-dark">
            <img class="w-100" src="/storage/{{ $post->image }}" alt="img">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center border-bottom pb-2">
                <div class="pr-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="img" class="w-100 rounded-circle border border-dark" style="max-width: 50px;">
                </div>
                <div class="d-flex">
                    <h4><a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }} </a></h4>
                    <a href="#" class="pl-3">Follow</a>
                </div>
            </div>
            <div class="pt-2 border-bottom border-right">
                <p> {{ $post->caption }}</p>
            </div>

        </div>
    </div>

</div>
@endsection
