@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Category</div>

                <div class="card-body">
               
       
@if($cat->count() > 0)
         
         
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Edit</th>
      @if(auth()->user()->hasTeamPermission(auth()->user()->currentTeam ,'create'))
      <th scope="col">Delete</th>
      @endif
    </tr>
  </thead>
  <tbody>
  @foreach($cat as $categoyName)
       <tr>
      <th scope="row">{{$categoyName->name}}</th>
      <td>
           <a class="" href="{{route('category.edit' , ['id' => $categoyName ->id ])}}">
           edit
           </a>
        
      </td>
      @if(auth()->user()->hasTeamPermission(auth()->user()->currentTeam ,'create'))
      <td>
           <a href="{{route('category.delete' , ['id' => $categoyName ->id ])}}">
               delete
           </a>
      </td>
  @endif
    </tr>

  @endforeach    
  </tbody>
</table>

@else
    <p class="text-center">There is no category.</p>
        
 @endif       
            
               
               
                      
               
               
               
               
                
            </div>
        </div>
    </div>
</div>
@endsection
