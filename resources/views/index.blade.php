@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Danh sách sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.create') }}"class="btn btn-primary float-end">Thêm mới sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('thongbao'))
                <div class="alert alert-success">
                    {{ Session::get('thongbao') }}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>stt</th>
                            <th>mssv</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sinhvien as $sv)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $sv->masv }}</td>
                            <td>{{ $sv->hoten }}</td>
                            <td>{{ $sv->ngaysinh}}</td>
                            <td>{{ $sv->gioitinh}}</td>
                            <td>{{ $sv->sodt }}</td>
                            <td>{{ $sv->diachi }}</td>
                            <td><form action="{{ route('sinhvien.destroy',$sv->id) }}"method="POST">
                                <a href="{{ route('sinhvien.edit',$sv->id) }}" class="btn btn-info">Sửu</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                            </td>
                       
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection