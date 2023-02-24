      @include('common.htmlUpper')
      <div class="pet-details">
            <h1>Pet Details: </h1>
                <div class="details">
                  Name:  {{$detail->name }} <br>
                  Species:  {{$detail->species}}<br>
                  Breed:  {{$detail->breed }}<br>
                  Age:  {{$detail->age }}<br>
                  Weight:  {{$detail->weight }}
                </div>
      </div>
@include('common.htmlBottom')