@extends('layouts.main')

@section('content')
    <div class="container" style="margin-top: 40px;">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>Order ID</th>
                        <th>Kerja.in</th>
                        <th>Nama Lengkap</th>
                        <th>Telepon</th>
                        <th>Metode Pembayaran</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Tanggal Pesan</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($orders) == 0)
                        <tr><td colspan="7">No Records Found</td></tr>
                    @endif
                    @foreach($orders as $order)
                        <tr>
                            <td>PN-{{ $order->id }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ $order->baskets->user->name }} {{ $order->baskets->user->surname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->payment_method}}</td>
                            <td>{{ $order->order_price}} ₺</td>
                            <td>{{ $order->status }} </td>
                            <td>{{ $order->created_at }}</td>
                            <td><a href="/admin-orders/{{$order->id}}/edit" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$orders->links()}}
            </div>
        </div>
    </div>
@endsection

