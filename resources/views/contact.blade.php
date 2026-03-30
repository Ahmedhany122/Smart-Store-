@extends('layout')

@section('content')
<div class="container mt-5">
<h2>Contact Us</h2>
<form action="/contact" method="POST">
  @csrf
  <div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Message</label>
    <textarea name="message" class="form-control" required></textarea>
  </div>

  <button class="btn btn-primary w-100">Send Message</button>
</form>
</div>
@endsection