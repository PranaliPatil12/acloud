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
            <button style="cursor:pointer" class="btn btn-primary" type="button" onclick="appendRow">Add new asset</button>
        </div>

        <div id="div">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
<script>
var x=2
function appendRow()
{
   var d = document.getElementById('div');
   d.innerHTML += "<label>Name :</label><input type='text' id='name"+ x++ +"'><br ><label>Count :</label><input type='text' id='count"+ x++ +"'><br >";
}
</script> 
@endsection
