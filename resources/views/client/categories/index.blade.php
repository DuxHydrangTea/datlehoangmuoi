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
       
        <table class="table">
            <thead class="table-header">
                <th>ID</th>
                <th>Tên thể loại</th>
                <th>Mô tả</th>
                <th>Thể loại gốc</th>
                <th>Ngày tạo</th>
                <th >Sửa</th>
                <th>Xoá</th>
            </thead>
            <tbody  class="table-body">
                @foreach ($categories as $category )
                <tr>
                    <td class="center">#{{$category->id}}</td>
                    <td><strong>{{$category->name}}</strong></td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->parent->name ?? "Không"}}</td>
                    <td>{{$category->created_at}}</td>
                    <td class="center">
                        <a class="btn btn-edit" href="{{route('client.category.edit', $category->id)}}">Edit</a>
                    </td>
                    <td class="center">
                        <form action="{{route('client.category.delete', $category->id)}}" class="btn btn-delete" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Xác nhận xoá thể loại này?')">Delete</button>
                         </form>
                        </td>
                </tr>
                @endforeach
               
               

            </tbody>
        </table>
      
      </div>
    
    </div>
 
  </main>
  @endsection