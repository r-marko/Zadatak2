<?php use App\Http\Controllers; ?>

@extends('layouts.layout')

@section('content')
<div class ="container pt-2">
    <!-- ovo bi trebalo da koristi foreach petlju kroz bazu da vrati sliku, naziv i ime svakog bloga -->
</div>
@auth
<form name="textarea" method="post" action="{{ route('form') }}">
<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="submit" class="btn btn-success">Post</button>
</div>
</form>
@endauth
@endsection

