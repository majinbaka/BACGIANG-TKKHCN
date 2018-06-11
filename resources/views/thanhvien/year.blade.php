@extends('thanhvien._layout')
@section('css')
    @parent
@endsection
@section('content')

    <section class="content-header">
      <h1>
        Báo cáo Khoa học công nghệ 
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Báo cáo Khoa học công nghệ 
              </h3>
            </div>
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/thanhvien/bieumau/baocao/') }}">
                {{ csrf_field() }}
                {{ method_field('PATCH')}}
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Năm báo cáo</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input name="year" type="text" class="form-control datemask">
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