<div>
    <ul>
@foreach ($animalList as $animal)
    <li>
        {{$animal->owner->first_name}}`s:

      <a href="{{route('animals.detail', ['id'=> $animal->id])}}">{{$animal->name}}</a>  
            <div class="image">
                <img src="/images/pets/{{ $animal->image->path }}" alt="">
            </div>
    </li>
@endforeach;
    </ul>
</div>