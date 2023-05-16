@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Sửa</strong><span class="small ms-1">User</span></div>
                    <div class="card-body">
                        <form  action="{{URL::to('/admin/postedituser')}}" method="post" enctype="multipart/form-data" class="row g-3" style="padding:20px 20px;">
                            @csrf
                            <input type="hidden" value="{{$user->admin_id}}" name="user_id">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên User</label>
                                <input type="text" name="user_name" value="{{$user->admin_name}}" class="form-control" id="user_name">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" name="email" value="{{$user->email}}" class="form-control" id="Email">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="text" name="user_phone" value="{{$user->admin_phone}}" class="form-control" id="Phone">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="password" value="{{$user->password}}" class="form-control" id="Pass">
                            </div>
                            </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Sửa User</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

  $('.btn-primary').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Bạn có muốn lưu thay đổi?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
  
</script>