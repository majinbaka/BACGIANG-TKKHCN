@extends('thanhvien.prelayout')
@section('css')
    @parent
@endsection
@section('content')
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Thông tin đăng ký</a></li>
</ul>
	<form role="form" method="POST" action="{{ url('/dangky/') }}">
		{{ csrf_field() }}
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <section class="content-header">
      <h1>
        Thông tin đăng ký
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thông tin đăng ký
              </h3>
            </div>
            <div class="box-body pad">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Tên đăng nhập</label>
                      <input name="username" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                      <input name="useremail" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Mật khẩu</label>
                      <input name="password" type="password" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                      <input name="password_confirmation" type="password" class="form-control">
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label>Tên đơn vị</label>
                    <input name="reporter_element_name" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label>Địa chỉ</label>
                    <input name="address" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Điện thoại</label>
                    <input name="phone" type="text" class="form-control">
                </div>
              </div>
            </div>
                <button type="submit">Đăng ký</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

</div>
</form>
  @endsection
