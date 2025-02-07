<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Company Edit</h4>
                    <a href="{{ route('admin.category.index') }}" class="btn btn-primary">go back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="name">Enter category Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="email">Enter category Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control" value="{{$category->email}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="phone">Enter category Phone <span class="text-danger">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{$category->phone}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="address">Enter category Address <span class="text-danger">*</span></label>
                                <input type="text" name="address" id="address" class="form-control" value="{{$category->address}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="facebook">Enter Facebook Link</label>
                                <input type="text" name="facebook" id="facebook" class="form-control" value="{{$category->facebook}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="youtube">Enter Youtube Link</label>
                                <input type="text" name="youtube" id="youtube" class="form-control" value="{{$category->youtube}}">
                            </div>

                            <div class="col-6 mb-2">
                                <label for="logo">Enter category Logo <span class="text-danger">*</span></label>
                                <input type="file" name="logo" id="logo" class="form-control">
                                <img src="{{asset($category->logo)}}" width="200" alt="">
                            </div>

                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-success">Update Record</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{--
primary-blue
danger-red
success-green
info-skyblue
--}}
