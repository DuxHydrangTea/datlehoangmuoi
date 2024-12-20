@extends('client.page',
[
    'display_banner' => false
])
@section('content')
<main class="main">
    <div class="container">
      <div class="main-heading">
        <p>Thể loại</p>
        <h1>Tất cả thể loại</h1>
      </div>
      <div class="main-news">
        <form action="{{route('client.category.update', $category->id)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group-element">
                    <h3>Tên</h3>
                    <input type="text" name="name" value="{{$category->name}}">
                </div>
                <div class="form-group-element">
                    <h3>Thể loại gốc</h3>
                    <select name="parent_id" id="">
                        <option value="0">Không</option>
                        @foreach ($categories as  $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
              
           </div>
            <div class="form-group">
                <h3>Mô tả</h3>
                <textarea name="description" id="" rows="10">{{$category->description}}</textarea>
                <button type="submit">Lưu</button>
            </div>
        </form>
      
      
      </div>
    
    </div>
 
  </main>
  @endsection