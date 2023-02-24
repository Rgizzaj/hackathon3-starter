@include('common.htmlUpper')

<h2>Pet Detail: </h2>

      <div class="pet-details">
                <div class="details">
                  <span>Name: {{$detail->name }} <br></span> 
                  <span>Species:  {{$detail->species}}<br></span>
                  <span>Breed:  {{$detail->breed }}<br></span>
                  <span>Age:  {{$detail->age }}<br></span>
                  <span>Weight:  {{$detail->weight }}</span>
                </div>
      </div>

@include('common.htmlBottom')