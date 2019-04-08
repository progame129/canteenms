@extends('adminlte::layouts.app')

@section('main-content')
    <section class="content-header">
        <h1>
            Danh sách danh mục
        </h1>
        <form action="{{ route('category_get') }}" method="get" id="formAddProduct">
            <input type="submit" value="Thêm danh mục" class="btn btn-default">
        </form>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bill</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @if (Session::has('message'))
            <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12">
                        <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" >ID</th>
                                <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Tên danh mục</th>
                                <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="">Action</th></tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td >
                                        <a href="{{ route('category_get') }}?id={{ $category->id }}"><button class="btn btmn-danger" type="button">Sửa</button></a>
                                    </td>
                                    <td>
                                         <a href="{{ route('delete-category') }}?id={{ $category->id }}"><button class="btn btmn-warning" type="button">Delete</button></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

