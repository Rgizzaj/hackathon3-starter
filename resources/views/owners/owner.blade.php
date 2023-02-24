@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (is_null($owner->id))
    <form action="{{ route('owners.insert') }}" method="post">
    
@else
    <form action="{{ route('owners.update', $owner->id) }}" method="post">

     @method('PUT')   
    
@endif


<div class="form"> 
    <form action="{{ route('owners.insert') }}" method="post">
        @csrf

        <label for="fname">First Name:</label>
        <br>
        <input type="text" name="first_name" id="fname" value="{{ old('first_name', $owner->first_name) }}">
        <br>
        <br>
        <label for="sname">Surname:</label>
        <br>
        <input type="text" name="surname" id="sname" value=" {{ old('surname', $owner->surname) }}">
        <br>
        <br>
        <label for="email">email:</label>
        <br>
        <input type="text" name="email"  id="email" value="{{ old('email', $owner->email) }}">
        <br>
        <button type="submit">Update</button>

        {{ session('success_message') }}

    </form>
</div>

@if(isset($owner->id))
    <form action="{{ route('owners.delete', $owner->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button>Delete</button>
    </form>
@endif