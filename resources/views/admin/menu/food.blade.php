@extends('admin.master')
@section('title')
    Foods List
@endsection

@section('body')
    <div class="py-5">
        <div class="container mx-auto">
            <div class="row col-md-12">
                <div class="card col-md-8 mx-auto">
                    <div class="card-header">
                        <h2 class="text-center text-success">Foods List</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table border">
                                <thead>
                                <tr>
                                    <th >#</th>
                                    <th >Food Name</th>
                                    <th >Price</th>
                                    <th >Image</th>
                                    <th >Description</th>
                                    <th >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>Tk. {{ $data->price }}</td>
                                        <td>
                                            <img src="/food_image/{{ $data->image }}" style="height: 150px; width: 150px;" alt="">
                                        </td>
                                        <td>{{ $data->description }}</td>
                                        <td>
                                            <a href="{{ url('/delete_food',$data->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="{{ url('/update_food',$data->id) }}" class="btn btn-success btn-sm">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="food_menu" class="btn btn-success form-control">Upload New Food</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
