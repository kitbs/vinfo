
<div class="row">
	<div class="col-md-6 col-md-push-6">
{{-- 		<fieldset>
			<legend>{{ trans('sections.avatar') }}</legend>
			<div class="media col-md-offset-2 col-md-8">
				<div class="media-left media-middle">
					<img src="{{ asset('img/user.png') }}" class="img-circle img-avatar-lg media-object">
				</div>
				<div class="media-body media-middle">
					<button type="button" class="btn btn-default btn-block">{{ trans('actions.remove') }}</button>
					<button type="button" class="btn btn-default btn-block">{{ trans('actions.change') }}</button>
				</div>
			</div>
		</fieldset> --}}
	</div>
	<div class="col-md-6 col-md-pull-6">

		<fieldset>
			<legend>{{ trans('sections.account') }}</legend>
			<div class="form-group{{ $errors->first('name', ' has-error') }}">
				<label for="name" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.name') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.name')]) !!}
					<span class="help-block">{{ $errors->first('name') }}</span>
				</div>
			</div>

			<div class="form-group{{ $errors->first('email', ' has-error') }}">
				<label for="email" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.email') }}
				</label>
				<div class="col-md-8 col-sm-7">
					<div class="input-group">
						{!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('models/user.attributes.email')]) !!}
						<span class="input-group-btn">
							<a href="#" class="btn btn-link btn-sm disabled" data-email="#email"><i class="fa fa-envelope"></i></a>
						</span>
					</div>
					<span class="help-block">{{ $errors->first('email') }}</span>
				</div>
			</div>
			@if ($user->id != 1)
			<div class="form-group{{ $errors->first('is_admin', ' has-error') }}">
				<div class="col-md-offset-4 col-md-8 col-sm-offset-3 col-sm-7">
					<div class="checkbox">
						<label for="is_admin">
							{!! Form::hidden('is_admin', 0) !!}
							{!! Form::checkbox('is_admin') !!} {{ trans('models/user.attributes.is_admin') }}
						</label>
					</div>
					<span class="help-block">{{ $errors->first('is_admin') }}</span>
				</div>
			</div>
			@endif
		</fieldset>

	</div>
</div>
<div class="row">

	<div class="col-md-6">
		<fieldset>
			<legend>
				{{ trans('models/user.attributes.new_password') }}
			</legend>

			<div class="form-group{{ $errors->first('password', ' has-error') }}">
				<label for="password" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.new_password') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.new_password')]) !!}
					<span class="help-block">{{ $errors->first('password') }}</span>
				</div>
			</div>

			<div class="form-group{{ $errors->first('password_confirmation', ' has-error') }}">
				<label for="password_confirmation" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.password_confirmation') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.password_confirmation')]) !!}
					<span class="help-block">{{ $errors->first('password_confirmation') }}</span>
				</div>
			</div>

		</fieldset>
	</div>
	<div class="col-md-6">
		<fieldset>
			<legend>{{ trans('sections.settings') }}</legend>
			<div class="form-group{{ $errors->first('country_id', ' has-error') }}">
				<label for="country_id" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.country_id') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.country_id'), 'data-selectize' => 'country', 'id' => 'country_id']) !!}
					<span class="help-block">{{ $errors->first('country_id') }}</span>
				</div>
			</div>

			<div class="form-group{{ $errors->first('language_id', ' has-error') }}">
				<label for="language_id" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.language_id') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::select('language_id', $languages, null, ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.language_id'), 'data-selectize' => 'single', 'id' => 'language_id']) !!}
					<span class="help-block">{{ $errors->first('language_id') }}</span>
				</div>
			</div>

			<div class="form-group{{ $errors->first('currency_id', ' has-error') }}">
				<label for="currency_id" class="col-md-4 col-sm-3 control-label">
					{{ trans('models/user.attributes.currency_id') }}
				</label>
				<div class="col-md-8 col-sm-7">
					{!! Form::select('currency_id', $currencies, null, ['class' => 'form-control', 'placeholder' => trans('models/user.attributes.currency_id'), 'data-selectize' => 'single', 'id' => 'currency_id']) !!}
					<span class="help-block">{{ $errors->first('currency_id') }}</span>
				</div>
			</div>
		</fieldset>

	</div>
</div>

@section('scripts')
<script src="{{ asset('js/users.js') }}"></script>
@endsection