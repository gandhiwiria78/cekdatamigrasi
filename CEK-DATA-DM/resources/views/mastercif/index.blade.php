@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Upload Master CIF
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
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>

@endsection
