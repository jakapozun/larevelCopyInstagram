@extends('layouts.app')

@section('content')
<div class="container">
    @if(!$posts->isEmpty())

        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}"> <img class="w-100" src="/storage/{{ $post->image }}" alt="img"></a>
                </div>
            </div>
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                        <h4><a href="/profile/{{ $post->user->id }}" class="text-dark">{{ $post->user->username }} </a></h4>
                    </div>
                    <div>
                        <p> {{ $post->caption }}</p>
                    </div>

                </div>
            </div>
        @endforeach

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
    @else
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <h3>No posts available right now.</h3>
            </div>

        </div>

    @endif

</div>
@endsection
