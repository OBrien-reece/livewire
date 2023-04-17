<div class="form-group">
    <label for="director">Select Director</label>
    <select name="director" id="" class="form-control" wire:model="selected_director">
        <option value="" disabled selected>Select a director</option>

        @foreach(\App\Models\Director::all() as $director)
            <option value="{{ $director->id }}">{{ $director->name }}</option>
        @endforeach
    </select>
</div>
@if($selected_director)
        <label for="movie">Select Movie</label>
        <select name="movie" id="" class="form-control">
            @foreach(\App\Models\Movie::all() as $movie)
                <option value="{{ $movie->id }}">{{ $movie->name }}</option>
            @endforeach
        </select>
@endif