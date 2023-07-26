@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
<div class="form-container">
  <h1 class="form-title">{{ $pageTitle }}</h1>
  <form class="form" method="POST" action="{{ route('feedbacks.store') }}">
  @csrf  
  <div class="form-item">
      <label>Name:</label>
      <input class="form-input" type="text" value="{{old('sender') }}" name="sender">
      @error('name')
          <div class="alert-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-item">
      <label>Feedback:</label>
      <textarea class="form-text-area" name="feedbacks">{{old('feedbacks') }}</textarea>
    </div>

    <div class="form-item">
      <label>Comments:</label>
      <textarea class="form-text-area" value="{{old('comments') }}" name="comments"></textarea>
      @error('due_date')
          <div class="alert-danger">{{ $message }}</div>
      @enderror
    </div>

    
    <button type="submit" class="form-button">Submit</button>
  </form>
</div>
@endsection