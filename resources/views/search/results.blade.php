<x-layout>
	<div class="component">
		<h2>Search Results</h2>

		<p>
		  Search results for: <strong>{{ $searchTerm }}</strong>
		</p>

		<div class="component grid-5">
			@if(isset($newsResults))
			  @foreach ($newsResults as $result)
			  <a class="component grid_item" href="{{ route('news.index') }}/{{ $result->id }}">{{ $result->title }}</a>
				@endforeach
			@endif

			@if(isset($categoriesResults))
			  @foreach ($categoriesResults as $result)
			  <a class="component grid_item" href="{{ route('categories.index') }}/{{ $result->id }}">{{ $result->name }}</a>
				@endforeach
			@endif

			@if(isset($tagsResults))
			  @foreach ($tagsResults as $result)
			  {{ $result->getRouteKeyName() }}
			  <a class="component grid_item" href="{{ route('tags.index') }}/{{ $result->id }}">{{ $result->name }}</a>
				@endforeach
			@endif
		</div>
	</div>
</x-layout>