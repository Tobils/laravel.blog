@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog') }}
                    <a href="{{ route('blog.create') }}" type="submit" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    @forelse ($blogs as $blog)
                        {{ $blog }}
                    @empty
                        <h2>Empty Data</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
