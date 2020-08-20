<div class="row ">
  @foreach($card as $val)

  <div class="col-md-3 pb-2">
    <div class="card">
      <img class="card-img-top" src="{{url('img/bg1.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{$val->hotel->hotelName}}</h5>
        <h5 class="card-title"><i class="fas fa-map-pin"></i>   &nbsp;{{$val->hotel->region}}</h5>

        <p class="card-text is-marginless">
          @if($val->roomCategory == 'single')
          <p class=" color-four is-size-7  " >1 night, 2 adults</p>
          <p class=" color-four is-size-7  " >Single Room</p>
          @elseif($val->roomCategory == 'double')
          <p class=" color-four is-size-7  " >1 night, 2 adults</p>
          <p class=" color-four is-size-7  " >Double Room</p>
          @elseif($val->roomCategory == 'communicatingRoom')
          <p class=" color-four is-size-7  " >1 night, 4 adults</p>
          <p class=" color-four is-size-7  " >Communicating Room</p>
          @endif

        </p>
        <div class="float-right">
        <a href='{{url('hotelPage/'.$val->idPrice)}}' class="  noDeco color-four  is-small">More Info   &nbsp;<i class="fas fa-chevron-right "></i></a>
        </div>
      </div>
      <div class="card-footer">

        <small class="text-muted">

          {{ $val->created_at->diffForHumans()}}

        </small>

      </div>
    </div>
  </div>
  @endforeach
  <br>
</div>
<br>
