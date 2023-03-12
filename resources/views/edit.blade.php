@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>sua svz</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }}"class="btn btn-primary float-end">sanh sach sv</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.update',$sinhvien -> id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã sinh viên</strong>
                            <input type="text" name="masv"class="form-control" placeholder="nhập mã số sinh viên"value="{{ $sinhvien->masv }}">
                        </div>
                        <div class="form-group">
                            <strong>Họ tên</strong>
                            <input type="text" name="hoten"class="form-control" placeholder="nhập mã họ tên"value="{{ $sinhvien->hoten }}">
                        </div>
                        <div class="form-group">
                            <strong>Ngày sinh</strong>
                            <input type="date" name="ngaysinh"class="form-control" placeholder="Nhập ngày sinh"value="{{ $sinhvien->ngaysinh }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>giới tính</strong>
                            <select name="gioitinh" class="form-select">
                                <option selected>chọn giới tính</option>
                                <option value="nam" {{ $sinhvien->gioitinh =="nam"?'selected':'' }}>nam</option>
                                <option value="nu"{{ $sinhvien->gioitinh =="nu"?'selected':'' }}>nu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Số điện thoại</strong>
                            <input type="text" name="sodt" class="form-control" placeholder="nhập số điện thoại"value="{{ $sinhvien->sodt }}">
                        <div class="form-group">
                            <strong>Địa chỉ</strong>
                            <input type="text" name="diachi" class="form-control" placeholder="nhập địa chỉ"value="{{ $sinhvien->diachi }}">
                        </div>
                    </div>
                </div>
                    <button type="submit" class="btn btn-success mt-2">cap nhat</button>
                </form>
            </div>
        </div>

    </div>
@endsection