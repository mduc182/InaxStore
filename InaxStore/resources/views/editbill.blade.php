@extends('layouts.billlayout')

@section('content')

<div class="container">
<form action="{!! Route('updatebill', $bills->id) !!}" method="post">
            {{ csrf_field() }}


            <input class="btn btn-success" value="Sửa" type="submit" name="btn-edit">
            </form>


</div>

@endsection