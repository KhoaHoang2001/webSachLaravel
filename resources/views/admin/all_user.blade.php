@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">User</span></div>
            <div class="card-body">
              <a href="{{URL::to('/admin/add-user')}}" 
                class="btn btn-primary active" 
                aria-pressed="true" 
                style="background-color: green; float:right">Thêm user</a>
            <form action="{{ route('admin.web.finduser') }}" method="GET">
              {{ csrf_field() }}
              <div class="input-group mb-3" style="width: 450px">
                <input type="search" name="search_query" class="form-control" placeholder="Tìm kiếm" >
                <button class="btn btn-outline-secondary" type = "submit" style="background-color:#5DADE2;color:black" id="button-addon2">Search</button>
              </div>
            </form>
              <div class="example">
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                  <table class="table">
                      <thead style="background-color: #C9C4C3 ">
                        <tr>
                          <th>id</th>
                          <th>Name</th>
                          <th>email</th>
                          <th>SĐT</th>            
                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          $id = 1;
                        @endphp
                        @foreach ($users as $key => $user)
                        <tr>
                          <th scope="row">{{$user->admin_id}}</th>
                          <td>{{ $user->admin_name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->admin_phone }}</td>
                          <td>
                            <span class="text-ellipsis">
                            <a href="{{URL::to('/admin/edit-user')}}/{{$user->admin_id}}" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/admin/delete-user')}}/{{$user->admin_id}}" data-toggle="tooltip" class="btn btn-primary active btn-danger" role="button" aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
                            </span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example" style="float:right">
            <div>
                {{$users->links()}}
            </div>
         </nav>
        </div>
        
    </div>
    <script>
      $('.btn-danger').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
          title: 'Bạn có chắc?',
          text: 'Dữ liệu sẽ bị xóa vĩnh viễn và không thể phục hồi!!!!',
          icon: 'warning',
          buttons: ["Không", "Có!"],
      }).then(function(value) {
          if (value) {
              window.location.href = url;
          }
      });
});
    </script>

    
@endsection