@extends('admin._layout')

@section('content')
    <section class="content-header">
      <h1>
        Văn bản
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!--/.col (left) -->
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Thêm văn bản
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form role="form" method="POST" action="{{ url('/admin/vanban') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
                <div class="form-group">
                  <label>Số hiệu</label>
                  <input type="text" name="code" class="form-control">
                  {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                  <label>Loại văn bản</label>
                  <select name="category" class="form-control">
                    <option value="Luật">Luật</option>
                    <option value="Nghị định">Nghị định</option>
                    <option value="Thông tư">Thông tư</option>
                    <option value="Chỉ định">Chỉ định</option>
                    <option value="Quyết định">Quyết định</option>
                  </select>
                  {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                  <label>Cơ quan ban hành</label>
                  <input type="text" name="publisher" class="form-control">
                  {!! $errors->first('publisher', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                  <label>Ngày ban hành</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="publish_day" id="datemask" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  {!! $errors->first('publish_day', '<p class="help-block">:message</p>') !!}
                </div>
                </div>
                <div class="form-group">
                  <label>Người ký</label>
                  <input type="text" name="signer" class="form-control">
                  {!! $errors->first('signer', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                  <label>Trích dẫn ngắn</label>
                  <input type="text" name="description" class="form-control">
                  {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group">
                  <label>Văn bản</label>
                  <input type="file" name="url" id="exampleInputFile">
                  {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
                </div>
                    <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="/admin/vanban" class="btn btn-danger">Hủy</a>
              </div>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    
@endsection