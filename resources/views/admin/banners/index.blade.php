@extends('admin._layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách ảnh banner
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách ảnh banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Image</th>
                                <th>Link liên kết</th>
                                <th>Trạng thái</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><img src="{{asset('banner/'.$item->url)}}" width="80" height="80"></td>
                                    <td>{{$item->target_link}}</td>
                                    <td>@if($item->status == 1) Hiển thị @else Không hiển thị @endif</td>
                                    <td><a href="/admin/banner/{{$item->id}}/edit">Sửa</a></td>
                                    <td>
                                        <form role="form" method="POST" action="{{ url('/admin/banner/'.$item->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?');" type="submit" name="Delete" value="Xóa">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection