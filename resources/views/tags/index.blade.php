<x-layout>
	<div class="component">
		<a class="btn" href="/tags/create">Create a new Tag</a>
	</div>

	@if($tags)

	<div class="component">
		<h4>Available tags ({{ $tags->count() }}):</h4>
		<div class="component grid-5">
			@foreach($tags as $tag)
		  	<a href="{{ route('tags.index') }}/{{ $tag->id }}" class="tag grid_item">{{ $tag->name }}</a>
		  @endforeach
		</div>
	</div>

	@else
		<h4>No tags for now...</h4>
	@endif
</x-layout>