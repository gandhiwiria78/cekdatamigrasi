@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                CEK CIF
                </div>
                <div class="card-body">
                    <form action="{{ route('cekdata') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="my-1 mr-2" for="pilihCek">PILIH</label>
                        <select class="custom-select my-1 mr-sm-2" id="pilihCek">
                            <option selected>Choose...</option>
                            <option value="1">SEMUA LOGIC CEK</option>
                            <option value="2">DOUBLE CIF</option>
                            <option value="3">NOMOR KTP</option>
                            <option value="4">NOMOR KTP</option>
                        </select>
                        <label class="my-1 mr-2" for="pilihTP">PILIH TP</label>
                        <select class="custom-select my-1 mr-sm-2" id="pilihTP">
                            <option selected>Choose...</option>
                            @isset($records)
                                @foreach ($users as $user)
                                    <p>This is user {{ $user->id }}</p>
                                @endforeach
                            @endisset
                        </select>
                        <button type="submit" class="btn btn-primary my-1">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    <br>

    </div>
</div>

<style>
    .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>

@endsection
