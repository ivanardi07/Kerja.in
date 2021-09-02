@extends('layouts/main')

@section('content')

<div class="container" style="margin-top: 40px;">

    <div class="row">
        <div class="col-sm-12 locations text-center">
            <h2>PESANAN</h2><br><br>
            @if (count($orders) == 0)
                <p>Anda belum memesan jasa kami</p>
            @else
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Harga Pesanan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    @foreach($orders as $order)
                        <tr class="text-$order">
                            <td>PN-{{ $order->id }}</td>
                            <td>{{ $order->order_price }} ₺</td>
                            <td>{{ $order->status }}</td>
                            <td><a href="/orders/{{$order->id}}" class="btn-sm btn-success">Detail</a></td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</div><!-- Container /- -->
@endsection