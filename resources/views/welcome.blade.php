@extends("app")

@section("content")
  <div class="list-group">

    @foreach (App\Models\Owner::all() as $owner)
      <a href="/owners/{{ $owner->id }}" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">

            @include("_partials/full_name")

            @include("_partials/created_at")

        </div>    
          
            @include("_partials/telephone")
        
            @include("_partials/postcode")
        
      </a>
    @endforeach
  </div>
@endsection