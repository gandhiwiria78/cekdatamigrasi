@extends('Head')

@section('judulHalaman', 'Upload Master CIF')

@section("konten")
<form action="import" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="file" name="mastercif" />
        
        <button type="submit" class="btn btn-primary" > Import</button>
    </div>
    
</form>


@endsection