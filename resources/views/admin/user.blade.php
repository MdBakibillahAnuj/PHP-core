@extends('admin.master')
@section('title')
    Users
@endsection

@section('body')
   <div class="py-5">
       <div class="container mx-auto">
           <div class="row col-md-12">
               <div class="card col-md-8 mx-auto">
                   <div class="card-header">
                       <h2 class="text-center text-success">Users</h2>
                   </div>
                   <div class="card-body">
                       <table class="table">
                           <thead>
                           <tr>
                               <th >Name</th>
                               <th >Email</th>
                               <th >Action</th>
                           </tr>
                           </thead>
                           <tbody>
                                @foreach($data as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        @if($data->user_type=="0")
                                        <td>
                                            <a href="{{ url('/delete_user',$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
{{--                                            <a href="" class="btn btn-success btn-sm">Edit</a>--}}

                                        </td>
                                        @else
                                            <td>Not Allowed</td>
                                        @endif
                                    </tr>
                                @endforeach
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <div class="py-5">
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
    </div>
@endsection

