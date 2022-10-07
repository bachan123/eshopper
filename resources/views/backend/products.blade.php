@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">New Events</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <div class="table-responsive">
                <p>
                  <a href="{{ route('admin.newevents.create') }}" class="btn btn-primary">Create New Event</a>
                </p>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($newevents))
                        @foreach($newevents as $key => $newevent)
                        <tr>
                            <td>{{$newevent->id}}</td>
                            <td>{{$newevent->title}}</td>
                            <td>{{$newevent->author}}</td>
                            <td>{{$newevent->description}}</td>
                            <td><img src="{{ asset('storage/newevents/'.$newevent->image )}}" width="70px" height="70px" alt="image"></td>
                            <td>
                              <a href="{{ route('admin.newevents.edit' ,$newevent->id) }}" class="btn btn-info">Edit</a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                              <form action="{{ route('admin.newevents.destroy' ,$newevent->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                              </form>
                            </td>
                        </tr>
                         @endforeach
                         @else
                         <tr>
                             <td colspan="3">No New Events Found<td>
                         </tr>
                         @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection