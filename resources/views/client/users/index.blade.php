@extends('client.page',
[
    'display_banner' => false
])
@section('content')
<main class="main">
    <div class="container">
      <div class="main-heading">
        <p>Danh sách người dùng</p>
        <h1>Tất cả thể loại</h1>
      </div>
      <div class="main-news">
       
        <table class="table">
            <thead class="table-header">
                <th>ID</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Quyền</th>
                <th>Ngày tạo</th>
                <th>Đổi quyền</th>
                <th>Xoá</th>
            </thead>
            <tbody  class="table-body">
                @foreach ($users as $user )
                <tr>
                    <td class="center">#{{$user->id}}</td>
                    <td><strong>{{$user->name ?? "No name"}}</strong></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>
                    <td class="center">
                        <form action="{{route('client.user.set_role', $user->id)}}" method="POST">
                          @csrf
                          @method('PUT')
                          <select name="role" id="" class="select-role">
                            <option value="user" {{$user->role == "user" ? "selected" : ""}}>Không quyền</option>
                             <option value="admin" {{$user->role == "admin" ? "selected" : ""}}>QUẢN TRỊ VIÊN</option>
                            
                             <option value="creator"{{$user->role == "creator" ? "selected" : ""}}>Người viết bài</option>
                          </select>
                          <button type="submit" class="btn btn-save">Lưu</button>
                        </form>
                    </td>
                    <td class="center">
                        <form action="{{route('client.user.delete', $user->id)}}" class="btn btn-delete" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Xác nhận xoá nguời dùng này?')">Delete</button>
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