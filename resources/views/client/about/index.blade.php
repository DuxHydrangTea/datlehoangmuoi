@extends('client.page')
@section('content')
<main class="main">
    <div class="main-about-us container ">
        @if (Auth::check()  && Auth::user()->isCreator() )
        <a href="{{route('introduce.edit')}}">Sửa</a>
        @endif
       
        <h1 class="main-about-us-heading"><strong>{!!$about->subject!!}</strong></h1>
        
        {!!$about->body!!}
    </div>

</main>


@endsection