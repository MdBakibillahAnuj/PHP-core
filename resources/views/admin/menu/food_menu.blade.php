@extends('admin.master')
@section('title')
    Add Foods
@endsection

@section('body')
    <div class="py-5">
        <div class="container mx-auto">
            <div class="row col-md-12">
                <div class="card col-md-8 mx-auto">
                    <div class="card-header">
                        <h2 class="text-center text-success">Add Food</h2>
                    </div>
                    <div class="card-body">
                       <div class="row">
                           <form action="{{ url('/upload_food') }}" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="form-group mt-3">
                                   <label for="">Title</label>
                                   <input type="text" class="form-control" name="title" placeholder="Enter Food Title"/>
                               </div>
                               <div class="form-group mt-3">
                                   <label for="">Price</label>
                                   <input type="number" class="form-control" name="price" placeholder="Enter Food Price"/>
                               </div>
                               <div class="form-group mt-3">
                                   <label for="">Image</label>
                                   <input type="file" class="form-control" name="image" placeholder="Enter Food Image"/>
                               </div>
                               <div class="form-group mt-3">
                                   <label for="">Description</label>
                                   <input type="text" class="form-control" name="description" placeholder="Enter Food Description"/>
                               </div>

                               <input type="submit" class="btn btn-success" value="submit"/>
                               <label><a href="food" class="btn btn-primary"> Foods List </a></label>

                           </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        </br>
        </br>
    </div>
@endsection
