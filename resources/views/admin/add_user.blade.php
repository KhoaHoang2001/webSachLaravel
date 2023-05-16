@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">User</span></div>
                    <div class="card-body">
                        <form class="row g-3" action='{{ route('admin.checkadduser') }}'style="padding:20px 20px;" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên User</label>
                                <input type="text" class="form-control" name="user_name" id="inputAddress">
                                {!! $errors->first('user_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" class="form-control"name="email" id="inputAddress">
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="number" class="form-control" name="user_phone" id="inputAddress">
                                {!! $errors->first('user_phone', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputAddress">
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Thêm User</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection