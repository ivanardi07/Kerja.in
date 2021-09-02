@extends('layouts.main')
@section('content')

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="/admin-products/create" class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Tambah Produk
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Nama Produk</th>
                        <th>Harga Asli</th>
                        <th>Harga Diskon</th>
                        <th>Detail Produk</th>
                        <th>Dibuat tanggal</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{!! $product->thumbs !!}</td>
                            <td> {{ $product->categories->category_name }}  </td>
                            <td>{{ $product->product_name }}</td>
                            <td>Rp {{ number_format($product->original_price) }}</td>
                            <td>Rp {{ number_format($product->product_price) }}</td>
                            <td>{!! str_limit($product->product_detail, 30) !!}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="/admin-products/{{$product->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="/admin-products/{{$product->id}}" class="btn btn-danger" data-method="delete"
                                   data-confirm="Are you sure?"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-12">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset("js/laravel-delete.js")}}"></script>
@endsection

