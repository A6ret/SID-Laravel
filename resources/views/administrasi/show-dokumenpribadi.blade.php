@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12" id="container-show">
                    <div class="card" id="show-laporan">
                        <form method="get" action="#" id="form-show-laporan">
                            <h3 class="text-center form-show-laporan-title">
                                Pengurusan {{ $administrasi->getKategoriAdministrasi->nama_kategori }}
                            </h3>
                            @csrf
                            <br /><br />
    
                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 1 :') }}
                                </label>
    
                                <div class="col-md-6">
                                    <input id="judul2-laporan-show" type="text"
                                        class="form-control"  value="{{ $administrasi->data1 }}" disabled>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 2 :') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data2) }}" alt="" width="100%">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 3 :') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data3) }}" alt="" width="100%">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 4: ') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data4) }}" alt="" width="100%">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 5 ') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data5) }}" alt="" width="100%">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 6 ') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data6) }}" alt="" width="100%">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="judul-laporan-show" id="judul-laporan-show" class="col-md-3 col-form-label mx-auto">
                                    {{ __('Data 7 ') }}
                                </label>
    
                                <div class="col-md-6">
                                    <img src="{{ asset($administrasi->data7) }}" alt="" width="100%">
                                </div>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection