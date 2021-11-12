@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 Program untuk Laporan Klaim dan Pencairan Jalinan di escete
                </div>
                <div class="card-body">
                   <form action="{{ route('importjalinan') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">1. Download data Escete di LAPORAN UMUM 🠺 pilih SIMPANAN 🠺 Jenis DETAIL MUTASI</label>
                            <br><label for="exampleFormControlFile1">2. Keterangan koreksi harus ada kata "KORIJ"</label>
                            <br><label for="exampleFormControlFile1">2. Keterangan koreksi harus ada kata "KORKLAIM" </label>
                            <br><label for="exampleFormControlFile1">3. Keterangan Iuran harus ada kata "IJ" </label>
                            <br><label for="exampleFormControlFile1">4. Keterangan klaim harus ada kata "PENCAIRAN" </label>
                            <input type="file" class="form-control-file" id="jalinan" name="mutasijalinan">
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
