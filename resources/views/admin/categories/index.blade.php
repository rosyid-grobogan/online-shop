@extends('admin.layouts.master')
@section('title', 'Categories')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Categories</h2>
                </div>
                <div class="card-body">
                    @include('admin.components.flash')
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->parent_id ? $category->parent->name : '(Parent)' }}</td>
                                    <td>
                                        <a href="{{ url('admin/categories/'.$category->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                                        {!! Form::open([
                                            'url' => 'admin/categories/'. $category->id,
                                            'class' => 'delete',
                                            'style' => 'display:inline-block'
                                            ]) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('Remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                                @empty
                                <tr>
                                    <td colspan="5">Belum ada data</td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
    </div>
@endsection
