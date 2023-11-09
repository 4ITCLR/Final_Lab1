<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}
            <div class="container">
                <a href="" class="btn btn-info">Create</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->cat_name }}</td>
                                <td>{{ $category->user_id }}</td>
                                <td>{{ $category->created_at }}</td>

                                <td>
                                    <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links}}
            </div>
        </div>
         <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Add Categories
                </div>
                <div class="card-body">

                <form action="{{route(add.category)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="CategoryName" class="form-label">Category Name</lable>
                        <input type="text" name ="category_name"class="form-control">
                        @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </div>

    </div>
</x-app-layout>

