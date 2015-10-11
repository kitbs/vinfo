@extends('layouts/default')

@section('title', trans('sections.currencies'))
@section('subtitle', $currency->name)

@section('content')
{!! Form::model($currency, ['action' => ['CurrenciesController@update', $currency->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
    <legend class="sr-only">{{ trans('models/currency.name') }}</legend>

    @include('currencies.form')

    <div class="form-group">
	    <div class="col-md-offset-2 col-md-10 col-sm-offset-3 col-sm-9">
	    	<button type="submit" class="btn btn-primary">{{ trans('actions.save') }}</button>
	    	<a href="{{ action('CurrenciesController@index') }}" class="btn btn-link">{{ trans('actions.cancel') }}</a>
	    </div>
    </div>
{!! Form::close() !!}
@endsection