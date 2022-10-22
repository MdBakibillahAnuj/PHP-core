@section('title')
    Edit Food Item
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
</head>

<body class="sb-nav-fixed">
@include('admin.top-nav')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.navbar');
    </div>
    <div id="layoutSidenav_content">
        <main class="bg-secondary">

            <div class="py-5">
                <div class="container mx-auto">
                    <div class="row col-md-12">
                        <div class="card col-md-8 mx-auto">
                            <div class="card-header">
                                <h2 class="text-center text-success">Edit Food</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <form action="{{ url('/edit_food',$data->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mt-3">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $data->title }}"/>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">Price</label>
                                            <input type="number" class="form-control" name="price" value="{{ $data->price }}"/>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="">Description</label>
                                            <input type="text" class="form-control" name="description" value="{{ $data->description }}"/>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label for="">Old Image</label>
                                            <label><img src="/food_image/{{ $data->image }}" alt="" style="height: 100px; width: 100px;"></label>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="">New Image</label>
                                            <input type="file" class="form-control" name="image" placeholder="Enter Food Image"/>
                                        </div>

                                        <input type="submit" class="btn btn-success" value="submit"/>

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
        </main>

    </div>
</div>
@include('admin.script')
</body>
</html>
