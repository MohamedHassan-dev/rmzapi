@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$solo -> name}} </div>

                <div class="card-body">
               
               <!--error handling if any field not insert data-->
              <div class="card-body" style="color: red;"> 
               @if(count($errors)>0)
                   
                     <ul class="navbar-nav mr-auto">
                     @foreach($errors->all() as $error)
                            <li class="nav-item active">
                               {{$error}}
                            </li>
                  @endforeach
                     </ul>
               @endif
             </div>
               
               
            <form  action ="{{route('category.update' , ['id' => $solo -> id ])}}" method="POST">   <!--you can also write on action = /category/store-->
            
            {{ csrf_field()}}
  <div class="form-group">
    <label for="name">Title</label>
    <input type="text" class="form-control" name="name" placeholder="{{$solo -> name}}">
    <small name="name" class="form-text text-muted">Please enter your Categorie title Edit.</small>
  </div>
  
    
  <button type="submit" class="btn btn-primary">Update</button>
</form>               
               
               
               
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
