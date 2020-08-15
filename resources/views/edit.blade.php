@extends('layouts.master')
@section('title-page', 'Final Project | Edit Pertanyaan')
@section('title', 'Edit Pertanyaan')
@section('breadcumb', 'Edit Pertanyaan')
@section('edit-pertanyaan')
<div class="row">
    <div class="col-md-12">
        <div class="mr-3 p-1">
            {{-- foreach disini --}}
            @foreach($data as $key => $value)
            <div class="card float-left mr-4" style="width: 20rem;">
                <div class="card-body" style="height:195px;">
                    <div class="d-block mb-2" style="overflow:hidden; height: 27px; width: 250px;">
                        <p class="card-title"><strong>{{$value['title']}}</strong></p>
                        <hr class="mt-4">
                    </div>
                    <div class="d-inline-block overflow-hidden h-50 w-75 mb-2">
                        {{$value['content']}}
                    </div>
                    <div class="d-inline row float-right" style="margin-top:62px;">
                        <a class="float-right"><small class="text-primary">Vote : 4.5 / 5</small></a>
                    </div>
                    <div class="d-inline">
                        <a href="{{url('/edit')}}/{{$value['id']}}/edit" class="btn btn-primary btn-sm">Edit Pertanyaan</a>
                        <a href="{{url('/questions')}}" class="btn btn-secondary btn-sm">Kembali</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
