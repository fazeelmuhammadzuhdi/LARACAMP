@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-4">
                <div class="card">
                    <div class="card-header">
                        Update Discount {{ $discount->name }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.update', $discount->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $discount->id }}">
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Name</label>
                                <input name="name" type="text"
                                    class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" required
                                    value="{{ old('name') ?: $discount->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Code</label>
                                <input name="code" type="text"
                                    class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" required
                                    value="{{ old('code') ?: $discount->code }}">

                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" cols="0"
                                    rows="2">{{ old('description') ?: $discount->description }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Discount Percentage</label>
                                <input name="percentage" type="number"
                                    class="form-control 
                                    {{ $errors->has('percentage') ? 'is-invalid' : '' }}"
                                    required value="{{ old('percentage') ?: $discount->percentage }}">
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{ $errors->first('percentage') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Save
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
