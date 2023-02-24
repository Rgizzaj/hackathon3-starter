@include('common.htmlUpper')

<h1>List of our pawcients: </h1>


    @foreach ($animalList as $animal)

        <div class="index">

                <div class="owner">{{$animal->owner->first_name}}`s:    
                    <a href="{{route('animals.detail', ['id'=> $animal->id])}}">{{$animal->name}}</a>  
                </div>

                <div class="image">
                    <img src="/images/pets/{{ $animal->image->path }}" alt="" width="500" height="400">
                </div>
        </div>

    @endforeach;
   
@include('common.htmlBottom')