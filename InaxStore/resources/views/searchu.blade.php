@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <form method="get" action="{{ route('searchu.result') }}" class="form-inline mr-auto">
                <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}"
                    class="form-control col-sm-8" placeholder="Nhập Nội Dung Cần Tìm Kiếm" aria-label="Search">
                <button style="margin-left:20px;" class="btn btn-success" type="submit">Tìm Kiếm</button>
            </form>
            <br>
            @if(isset($searchuResults))
            @if ($searchuResults-> isEmpty())
            <h2>Sorry, no results found for the term <b>"{{ $searchuterm }}"</b>.</h2>
            @else
            <h2>Có {{ $searchuResults->count() }} kết quả cho tìm kiếm <b>"{{ $searchuterm }}"</b></h2>
            <hr />
            @foreach($searchuResults->groupByType() as $type => $modelSearchuResults)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Bảng</th>
                        <th scope="col">{{ $type }}</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($modelSearchuResults as $searchuResult)
                    <tr>
                        <th scope="row">#</th>
                        <th><a href="{{ $searchuResult->url }}">{{ $searchuResult->title }}</a></th>
                        <th><a href="{{ $searchuResult->url }}">Xem Chi Tiết</a></th>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
            
             
            @endforeach
            @endif
            @endif
        </div>
    </div>
</div>
@endsection