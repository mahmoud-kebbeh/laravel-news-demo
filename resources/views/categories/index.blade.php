<x-layout>
	<div class="component">
		<a class="btn" href="/categories/create">Create a new Category</a>
	</div>

	@if($categories)

		<div class="component">
			<h4>Available categories ({{ $categories->count() }}):</h4>
			<div class="component grid-5">
				@foreach($categories as $category)
					<a href="{{ route('categories.index') }}/{{ $category->id }}" class="tag grid_item">{{ $category->name }}</a>
				@endforeach
		  </div>
	  </div>

	@else
		<h4>No categories for now...</h4>
	@endif
</x-layout>