@extends('layouts.main')
@section('content')
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                {!!Form::model($userDetails, ['route' => ['profile.update', $userDetails->id], "method" =>  "put","files" => true])!!}
                {!! Form::bsText("phone","Telepon") !!}
                {!! Form::bsText("m_phone","Nomor Handphone") !!}
                {!! Form::bsText("address","Alamat") !!}
                {!! Form::bsText("city","Kota") !!}
                {!! Form::bsText("country","Negara") !!}
                {!! Form::bsText("zipcode","Zip Code") !!}
                {!! Form::bsSubmit("Update") !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection