@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Status TP yang Telah terupload
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  1. Upload Master CIF
                </div>
                <div class="card-body">
                   <form action="{{ route('importmastercif') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pilih File Master CIF </label>
                            <input type="file" class="form-control-file" id="mastercif" name="mastercif">
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit" >Upload Data</button>
                    </form>
                    Status : 
                    
                </div>
            </div>
        </div>
    <br>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  2. Cek Master CIF
                </div>
                <div class="card-body">
                   <br>
                    <div class="col-md-8">
                        <div class="card">
                            <a class="btn btn-primary" href="{{ route('Cekcif') }}" role="button">Cek Cif </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

<style>
    .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>

@endsection
