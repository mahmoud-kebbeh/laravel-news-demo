<x-layout>
  <h1>Create a new category</h1>

	<form action="{{ route('categories.store') }}" method="post">
	  @csrf

	  <div class="form-group component">
	    <label for="name">Name:</label>
	    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
	    @error('name')
	    	<p class="error_message component">{{ $message }}</p>
	    @enderror
	  </div>

	  <button type="submit" class="btn btn-primary component">Create Category</button>
	</form>

</x-layout>