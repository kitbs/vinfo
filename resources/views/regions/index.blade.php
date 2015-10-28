@extends('layouts/default')

@section('title', trans('sections.regions'))

@section('content')
<div class="panel panel-default">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>{{ trans('models/region.attributes.name') }}</th>
					@if (App::getLocale() != 'en')
					<th>{{ trans('models/regions.attributes.name') }} ({{ Punic\Language::getName('en', App::getLocale()) }})</th>
					@endif
					<th>{{ trans('models/region.attributes.region_type_id') }}</th>
					<th>{{ trans('models/region.attributes.country_id') }}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($regions as $i => $region)
				@if ($i == 0 && $region->depth > 0)
				@foreach ($region->ancestors()->with('translations', 'country', 'regionType')->get() as $ancestor)
				<tr data-lft="{{ $ancestor->lft }}" data-rgt="{{ $ancestor->rgt }}" data-root="{{ $ancestor->country_id }}" class="collapse in active">
					<td>
						<span style="margin-left:{{ $ancestor->depth * 20 }}px;margin-right:5px;">
							@if (!$ancestor->isLeaf())
							<button type="button" class="btn btn-xs btn-link" data-toggle="tree-collapse" data-expand="{{ trans('tree.expand') }}" data-collapse="{{ trans('tree.collapse') }}"><u class="caret"></u></button>
							@else
							<span style="margin-left:20px;"></span>
							@endif
						</span>
						@if ($ancestor->shortcut_id)
						<a href="{{ action('RegionsController@edit', $ancestor->id) }}">{{ $ancestor->name }}</a> ({{ trans('tree.continued') }})
						<a href="{{ action('RegionsController@edit', $ancestor->shortcut_id) }}" class="btn btn-xs btn-link"><i class="fa fa-share"></i></a>
						@else
						<a href="{{ action('RegionsController@edit', $ancestor->id) }}" class="{{ $ancestor->is_structural ? 'structural' : null}} {{ $ancestor->region_type_id == 1 ? 'country' : null}}">{{ $ancestor->name }}</a>
						@endif
					</td>
					@if (App::getLocale() != 'en')
					<td>{{ $ancestor->name_en }}</td>
					@endif
					<td>{{ $ancestor->regionType->name }}</td>
					<td>{{ $ancestor->country->name }}</td>
				</tr>
				@endforeach
				<tr class="active">
					<td colspan="{{ App::getLocale() != 'en' ? 4 : 3 }}" class="text-center">
						<a href="{{ $regions->previousPageUrl() }}">({{ trans('tree.continued') }})</a>
					</td>
				</tr>
				@endif
				<tr data-lft="{{ $region->lft }}" data-rgt="{{ $region->rgt }}" data-root="{{ $region->country_id }}" class="collapse in {{ $region->is_structural ? 'text-muted' : null}}">
					<td>
						<span style="margin-left:{{ $region->depth * 20 }}px;margin-right:5px;">
							@if (!$region->isLeaf())
							<button type="button" class="btn btn-xs btn-link" data-toggle="tree-collapse" data-expand="{{ trans('tree.expand') }}" data-collapse="{{ trans('tree.collapse') }}"><u class="caret"></u></button>
							@else
							<span style="margin-left:20px;"></span>
							@endif
						</span>
						@if ($region->shortcut_id)
						<a href="{{ action('RegionsController@edit', $region->id) }}" class="{{ $region->is_structural ? 'structural' : null }}">{{ $region->name }}</a> 
						<a href="{{ action('RegionsController@edit', $region->shortcut_id) }}" class="btn btn-xs btn-link"><i class="fa fa-share"></i></a>
						@else
						<a href="{{ action('RegionsController@edit', $region->id) }}" class="{{ $region->is_structural ? 'structural' : null}} {{ $region->region_type_id == 1 ? 'country' : null}}">{{ $region->name }}</a>
						@endif
					</td>
					@if (App::getLocale() != 'en')
					<td>{{ $region->name_en }}</td>
					@endif
					<td>{{ $region->regionType->name }}</td>
					<td>{{ $region->country->name }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="panel-footer">
		{!! $regions->render() !!}
	</div>
</div>
@endsection

@section('scripts')
@parent
<script>
	$(function () {

		var tooltipOptions = {
			container: 'body',
			placement: 'left',
			title: function() {
				return $(this).hasClass('collapsed') ? $(this).data('data-expand') : $(this).data('collapse');
			}
		};

		$('[data-toggle="tree-collapse"]')
		.tooltip(tooltipOptions)
		.on('click', function() {
			var btn = $(this);
			btn.toggleClass('collapsed').tooltip(tooltipOptions);

			var tr = $(this).closest('tr');
			var children = $(this).closest('table').find('tr');

			children.each(function(i, e) {
				e = $(e);
				if (e.data('root') == tr.data('root') && e.data('lft') > tr.data('lft') && e.data('rgt') < tr.data('rgt')) {
					e.toggleClass('in', !btn.hasClass('collapsed'));
				}
			});

		});
	});

</script>
@endsection