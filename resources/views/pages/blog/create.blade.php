@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Title</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul Article">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Description</label>
                            <textarea type="text" class="form-control" id="formGroupExampleInput2" placeholder="Type article here"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Add Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
