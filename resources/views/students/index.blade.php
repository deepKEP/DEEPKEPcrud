@extends('students.layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center m-5">
        Your Students
    </h1>
    <div class="row">

    @foreach ( $student as $item)

        <div class="col-md-4 d-flex">
            
                <div class="card border-light m-3 shadow"> 
                    <div class="card-header text-white bg-dark">

                        <h4>{{  $item->firstName }} </h4>
                    </div>

                    <div class="card-body" >
                        <span>
                            <b>Last Name: </b> 
                            {{ $item->lastName }} 
                        </span>
                        <br/>
                        <span>
                            <b>Age: </b> 
                            {{ $item->age }} 
                        </span>
                        <br/>
                        <span>
                            <b>Gender: </b> 
                            {{ $item->gender }} 
                        </span> 
                        
                    </div>
                    <div class="d-flex justify-content-around" >
                        <a href="/students/{{ $item->id}}/edit">
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                Edit &rarr;
                            </button>
                        </a>
                        <form action="/students/{{ $item->id }}" method="POST" class="d-flex justify-content-end" >
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                Delete &rarr;
                            </button>
                        </form>
                    </div>
                </div>  
            
        </div>
    @endforeach

</div>
</div>
</div>
@endsection