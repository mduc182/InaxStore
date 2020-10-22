@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <form method="get" action="{{ route('searchb.result') }}" class="form-inline mr-auto">
                <input type="text" name="query" value="{{ isset($searchterm) ? $searchterm : ''  }}"
                    class="form-control col-sm-8" placeholder="Nhập Nội Dung Cần Tìm Kiếm" aria-label="Search">
                <button style="margin-left:20px;" class="btn btn-success" type="submit">Tìm Kiếm</button>
            </form>
            <br>
            @if(isset($searchbResults))
            @if ($searchbResults-> isEmpty())
            <h2>Sorry, no results found for the term <b>"{{ $searchbterm }}"</b>.</h2>
            @else
            <h2>Có {{ $searchbResults->count() }} kết quả cho tìm kiếm <b>"{{ $searchbterm }}"</b></h2>
            <hr />
            @foreach($searchbResults->groupByType() as $type => $modelSearchbResults)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Hóa Đơn</th>
                        <th scope="col">Thao Tác</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($modelSearchbResults as $searchbResult)
                    <tr>
                        <th scope="row">#</th>
                        <th><a href="{{ $searchbResult->url }}">{{ $searchbResult->title }}</a></th>
                        <th><a href="{{ $searchbResult->url }}">Xem Chi Tiết</a></th>
                        
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