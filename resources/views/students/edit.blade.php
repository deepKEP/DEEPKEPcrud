@extends('students.layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center m-5">Update Students</h1>
    
    <div class="card w-50 m-auto shadow">
        <div class="card-body">
            <form action="/students/{{ $student->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="p-3">
                    First Name:<br/><input class="form-control m-2" type="text" name="firstName" value="{{ $student->firstName }}" required><br/>
                    Last Name:<br/><input class="form-control m-2" type="text" name="lastName" value="{{ $student->lastName }}" required><br/>
                    Age:<br/><input class="form-control m-2" type="number" name="age"  value="{{ $student->age }}" pattern="[0-1]{1}[0-9]{0,2}" required><br/>
                    Gender:<br/>
                    <input type="radio" id="html" name="gender" value="Male" required>
                    <label for="html">MALE</label><br>
                    <input type="radio" id="css" name="gender" value="Female" required>
                    <label for="css">FEMALE</label><br>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-success" type="submit" required>Update</button>
                    </div>
                </div> 
            </form>  
        </div>
    </div>
    </div>
@endsection