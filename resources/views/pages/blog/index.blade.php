@extends('layouts.app')

@section('content')

<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
</style>

<main>

  <section class="py-3 text-center container">
    <div class="row py-lg-2">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Blog</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="{{ route('blog.create') }}"class="btn btn-primary my-2">Add</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-2 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($blogs as $blog)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $blog->image }}" class="bd-placeholder-img card-img-top" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                    <div class="card-body">
                        <p class="card-text">{{ $blog->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a 
                              href="{{ route('blog.edit', $blog->id) }}"
                              class="btn btn-sm btn-outline-success">
                              EDIT
                            </a>
                            <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="" data-id="{{ $blog->id }}">DELETE</button>
                            </div>
                            <small class="text-muted">{{ $blog->created_at }}</small>
                        </div>
                    </div>
                </div>
            </div>

        @empty
            <h2>Data Is Empty</h2>
        @endforelse
        
      </div>
    </div>
  </div>

</main>
@endsection
