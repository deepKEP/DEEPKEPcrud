@extends('students.layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center m-5">Add Students</h1>
    
    <div class="card w-50 m-auto shadow">
        <div class="card-body">
            <form action="/students" method="POST">
                @csrf
                <div class="p-3">
                    First Name:<br/><input class="form-control m-2" type="text" name="firstName" placeholder="First Name" required><br/>
                    Last Name:<br/><input class="form-control m-2" type="text" name="lastName" placeholder="Last Name" required><br/>
                    Age:<br/><input class="form-control m-2" type="number" name="age"  placeholder="Age" pattern="[0-1]{1}[0-9]{0,2}" required><br/>
                    Gender:<br/>
                    <input type="radio" id="html" name="gender" value="Male" required>
                    <label for="html">MALE</label><br>
                    <input type="radio" id="css" name="gender" value="Female" required>
                    <label for="css">FEMALE</label><br>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-dark" type="submit" required>Submit</button>
                    </div>
                </div> 
            </form>  
        </div>
    </div>
    </div>
@endsection