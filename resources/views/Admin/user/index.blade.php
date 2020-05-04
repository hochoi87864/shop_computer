@extends('Admin.layout.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thành viên - Danh sách</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
              <li class="breadcrumb-item active">Thành viên - Danh sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead class="thead-dark">
                    <th>ID</th>
                    <th>Tên hiển thị</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Quyền hạn</th>
                    <th>Xử lý</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                      <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone}}</td>
                          <td>{{$user->role}}</td>
                          <td>
                            <a href="{{route('admin.user.edit',$user->id)}}">Sửa</a> ||
                            <a href="{{route('admin.user.action',['delete',$user->id])}}">Xóa</a> ||
                            <a href="{{route('admin.change.password',$user->id)}}" class="button_change_password" data-email='{{$user->email}}' data-toggle="modal" data-target="#exampleModalCenter">Đổi mật khẩu</a>
                          </td>
                      </tr>
{{-- custom modal by me --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Đổi mật khẩu tài khoản <span class="model_change_password_email"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          Mật khẩu mới:
        <input type="text" name="new_password" class="form-control new_password_class">
        </div>
        <div>
          Nhập lại mật khẩu mới:
        <input type="text" name="confirm_password" class="form-control confirm_password_class">
        </div>
        <div class="form-group">
          <button class="btn btn-success mt-2 button_appect_change_password" style="float: right">Lưu mật khẩu</button>
          <div style="clear: both"></div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- end custom modal by me --}}
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
 <!-- /.content-wrapper -->
@endsection
@section('javascript')
<script>
  $(function()
  {
    $(".button_change_password").click(function(e)
    {
      e.preventDefault();
      email = $(this).attr('data-email');
      url = $(this).attr('href');
      $(".model_change_password_email").text(email);
     
      $(".button_appect_change_password").click(function(e)
      {
        e.preventDefault();
        var new_password = $('.new_password_class').val();
        var confirm_password = $('.confirm_password_class').val();
        $.ajax(
          {

          }
        ).done(function(result)
        {

        });
      });
    });
  });
</script>
@endsection