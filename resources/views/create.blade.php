@extends('layouts.master')
@section('title', 'Buat Pertanyaan')
@section('breadcumb', 'Buat Pertanyaan')
@section('tambah-pertanyaan')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class="form-control" id="judul" required placeholder="Ketikkan judul pertanyaan di sini...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
