@extends('thanhvien.prelayout')
@section('css')
    @parent
@endsection
@section('content')
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Thông tin đăng ký</a></li>
    {{--<li><a data-toggle="tab" href="#menu1">Biểu 1</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu2">Biểu 2</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu3">Biểu 3</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu4">Biểu 4</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu5">Biểu 5</a></li>--}}
    {{--<li><a data-toggle="tab" href="#menu6">Biểu 6</a></li>--}}
</ul>
	<form role="form" method="POST" action="{{ url('/dangky/') }}">
		{{ csrf_field() }}
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <section class="content-header">
      <h1>
        Thông tin đăng ký
      </h1>
      {{--<h4>--}}
      {{--Vui lòng điền đầy đủ thông tin vào tất cả các biểu để hoàn tất đăng ký--}}
      {{--</h4>--}}
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
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Tên đăng nhập</label>
                      <div class="input-group">
                        <input name="username" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Email</label>
                      <div class="input-group">
                        <input name="useremail" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Mật khẩu</label>
                      <div class="input-group">
                        <input name="password" type="password" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Tên đơn vị</label>
                  <div class="input-group">
                    <input name="reporter_element_name" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <div class="input-group">
                    <input name="address" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Tỉnh/TP</label>
                  <div class="input-group">
                    <input name="city" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Điện thoại</label>
                  <div class="input-group">
                    <input name="phone" type="text" class="form-control">
                  </div>
                </div>
              </div>
            </div>
                {{--<a href="#menu1" data-toggle="tab" class="btn btn-primary">Tiếp</a>--}}
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
@section('js')
<script type="text/javascript">
$(function () {
    //Initialize Select2 Elements
    $('.datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
});
var length = 0;
function addTechFields(){
  length = length + 1;
    $( "#technologytab" ).append( "<div class='row tab"+length+"'><div class='col-md-3'><input class='form-control' type='text' name='nametech"+length+"' /></div><div class='col-md-2'><input class='form-control' type='text' name='codetech"+length+"' /></div><div class='col-md-2'><input class='form-control' type='text' name='countrytech"+length+"' /></div><div class='col-md-1'><input type='text' class='form-control' name='yeartech"+length+"' /></div><div class='col-md-1'><input type='text' class='form-control' name='usedtech"+length+"' /></div><div class='col-md-2'><input type='text' class='form-control' name='moneytech"+length+"' /></div><div class='col-md-1'><input type='button' class='btn btn-primary' value='Xóa' onclick='$('.tab"+length+"').remove();' /></div></div>");
}
var donvi = 0
function addElementFields(){
  donvi = donvi + 1;
    $( "#elementtab" ).append( "<div class='row element_"+donvi+"''><div class='col-md-4'><input type='text' class='form-control' name='nameelement"+donvi+"' /></div><div class='col-md-3'><input type='text' class='form-control' name='bosselement"+donvi+"' /></div><div class='col-md-4'><input class='form-control' type='text' name='contactelement"+donvi+"' /></div><div class='col-md-1'><input type='button' class='btn btn-primary' value='Xóa' onclick='$('.element_"+donvi+"').remove();' /></div></div>");
}
</script>
@endsection