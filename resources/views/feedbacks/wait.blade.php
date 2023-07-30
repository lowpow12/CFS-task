@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="form-container">
    <h1 class="form-title">{{ $pageTitle }}</h1>
      @csrf
      <div class="form">
      <p>Your feedback have been submitted</p>
        <p>Make A New One?</p>
        
        <a
          type="button"
          class="form-button"
          style="text-decoration: none;"
          href="{{ route('feedbacks.create') }}"
        >
          Yes, make a new feedback</a>  &nbsp;
          <a
          type="submit"
          class="form-button"
          style="text-decoration: none;"
          href="{{ route('home') }}"
        >
          No, just want to make this feedback</a>
</div>      

@endsection