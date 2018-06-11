@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')

    <section class="content-header">
      <h1>
        Đổi mật khẩu
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Đổi mật khẩu
              </h3>
            </div>
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/thanhvien/password/') }}">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Mật khẩu mới</label>
                      <div class="input-group">
                        <input name="password" type="password" class="form-control datemask">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Nhập lại mật khẩu mới</label>
                      <div class="input-group">
                        <input name="repassword" type="password" class="form-control datemask">
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('js')
@endsection