<x-main>
    <br><br>
    <div class="row">
    @foreach ($feedback as $item )
    <div class="col-6">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h6 class="card-title">{{$item->title}}</h6>
          <h6 class="card-title">{{$item->content}}</h6>

<!--          <a href="{{route('booksbyID',$item->id)}}" class="btn btn-primary">Dettagli</a>-->
        </div>

      </div>
      <br><br>
    </div>

      @endforeach
    </div>
</x-main>

