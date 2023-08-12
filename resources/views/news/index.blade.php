<x-layout>
	<div class="component">
		<a class="btn" href="/news/create">Create a new News</a>
	</div>
	
	@if($news)

		<div class="news">
			<div class="component">
				<div class="component">
					<h2>All News ({{ $news->count() }}):</h2>
		  	</div>
			  @foreach($news as $singular_news)
				<div class="component singular_news">
					<div class="component flex">
				  	<a href="{{ route('news.index') }}/{{ $singular_news->id }}">{{ $singular_news->title }}</a>
				  	<h4>Published: {{ $singular_news->publish_date->diffForHumans() }}</h4>
			  	</div>
					<div class="component">
						<h4 class="component">Tags:</h4>
				  	@foreach($singular_news->tags as $tag)
					  	<a href="{{ route('tags.index') }}/{{ $tag->id }}" class="tag">{{ $tag->name }}</a>
					  @endforeach
					</div>
				</div>
			  @endforeach
	  	</div>
		</div>

	@else
		<h4>No news for now...</h4>
	@endif
</x-layout>