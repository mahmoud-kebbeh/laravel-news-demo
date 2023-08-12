<div class="component flex">
	<form class="component" action="{{ route('news.search') }}" method="GET">
	  <input type="search" name="search" id="search" placeholder="Search by news title">
	  <button class="btn" type="submit">Search</button>
	</form>
	<form class="component" action="{{ route('categories.search') }}" method="GET">
	  <input type="search" name="search" id="search" placeholder="Search by category name">
	  <button class="btn" type="submit">Search</button>
	</form>
	<form class="component" action="{{ route('tags.search') }}" method="GET">
	  <input type="search" name="search" id="search" placeholder="Search by tag name">
	  <button class="btn" type="submit">Search</button>
	</form>
</div>
