<x-layout>
  <h1>Create News</h1>

	<form action="{{ route('news.store') }}" method="post">
	  @csrf

	  <div class="form-group component">
	    <label for="title">Title:</label>
	    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
	    @error('title')
	    	<p class="error_message component">{{ $message }}</p>
	    @enderror
	  </div>

	  <div class="form-group component">
	    <label for="content">Content:</label>
	    <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
	    @error('content')
	    	<p class="error_message component">{{ $message }}</p>
	    @enderror
	  </div>

	  <div class="form-group component">
	    <label for="category">Category:</label>
	    <select name="category" id="category" class="form-control" value="{{ old('category') }}">
	      @foreach ($categories as $category)
	        <option value="{{ $category->id }}">{{ $category->name }}</option>
	      @endforeach
	    </select>
	    @error('category')
	    	<p class="error_message component">{{ $message }}</p>
	    @enderror
	  </div>

	  <div class="form-group component">
	    <p>Tags:</p>
		  {{-- <div>
		  	<a href="/tags/create">Add a new tag</a>
		  </div> --}}
	    <div class="component grid-5">
	    	@foreach ($tags as $tag)
			    <label class="labels" for="{{ $tag->name }}">
		        <input type="checkbox" name="tags[]" id="{{ $tag->name }}" class="form-control" value="{{ $tag->id }}">
		        {{ $tag->name }}
	        </label>
	      @endforeach
	      @error('tags')
		    	<p class="error_message component">{{ $message }}</p>
		    @enderror
	    </div>
	  </div>

	  <button type="submit" class="btn btn-primary component">Create News</button>
	</form>
</x-layout>