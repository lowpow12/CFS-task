@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
<div class="form-container">
  <h1 class="form-title">{{ $pageTitle }}</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form class="form" method="POST" action="{{ route('feedbacks.update', ['id' => $feedback->id]) }}">
  @method('PUT')
  @csrf  
  <div class="form-item">
      <label>Name:</label>
      <input class="form-input" type="text" value="{{old('sender', $feedback->sender) }}" name="sender">
    </div>

    <div class="form-item">
      <label>Feedback:</label>
      <textarea class="form-text-area" name="feedbacks">{{old('feedbacks', $feedback->feedbacks) }}</textarea>
    </div>

    <div class="form-item">
      <label>Comments:</label>
      <textarea class="form-text-area" type="text" name="comments">{{old('comments', $feedback->comments) }}</textarea>
    </div>

    <div class="form-item">
      <label>Media:</label>
      <input type="file" name="file">{{old('file', $feedback->file) }}
					</div>

    <button type="submit" class="form-button">Submit</button>
  </form>
</div>
@endsection