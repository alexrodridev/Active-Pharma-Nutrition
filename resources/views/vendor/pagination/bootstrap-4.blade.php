
@if ($paginator->hasPages())
	<nav class="pagination">
			{{-- Previous Page Link --}}
			@if ($paginator->onFirstPage())
				{{-- <a><i class="fa fa-angle-left"></i></a> --}}
			@else
				<a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
			@endif

			{{-- Pagination Elements --}}
			@foreach ($elements as $element)
				{{-- "Three Dots" Separator --}}
				@if (is_string($element))
					<li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
				@endif

				{{-- Array Of Links --}}
				@if (is_array($element))
					@foreach ($element as $page => $url)
						@if ($page == $paginator->currentPage())
							<span class="page-numbers current">{{ $page }}</span>
						@else
							<a href="{{ $url }}">{{ $page }}</a>
						@endif
					@endforeach
				@endif
			@endforeach

			{{-- Next Page Link --}}
			@if ($paginator->hasMorePages())
				<a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
			@else
				{{-- <a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a> --}}
			@endif
		</ul>
	</nav>
@endif
