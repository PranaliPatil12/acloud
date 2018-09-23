@extends('layouts.app')
 
@section('content')
 
    <h2>Assets Request Form</h2>
    <form method="POST" action="/request_form">
        <div class="form-group">
            <label for="name">Name of asset 1 : </label>
            <input type="text" class="form-control" id="name1" name="name">
        </div>
        <br>
        <div class="form-group">
            <label for="count">Count : </label>
            <input type="number" class="form-control" id="count1" name="count">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" class="btn btn-primary" type="button">Add new asset</button>
        </div>

        <div id="div">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
 
@endsection
