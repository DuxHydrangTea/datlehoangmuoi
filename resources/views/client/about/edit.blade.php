@extends('client.page')
@section('content')
<main class="main">
    <div class="main-about-us container ">
        <h1>Chỉnh sửa Bài giới thiệu</h1>
        <form method="POST" class="main-about-us-form" action="{{route('introduce.update')}}">
            @csrf
            <input type="text" name="subject" value="{{$about->subject??""}}" placeholder="Tiêu đề">
            <textarea name="body" id="editor" cols="30"  rows="10" placeholder="Nội dung"> {{$about->body??""}}</textarea>
            <button type="submit"> Lưu </button>
        </form>
    </div>
</main>
@endsection