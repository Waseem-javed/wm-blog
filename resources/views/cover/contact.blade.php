@extends('layouts.master')
@section('title','Contact')

@section('content')

<div class="container">
   
	<div class="row pt-5">
     <div class="col">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name@example.com">
            <label for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required>
            <label for="email">Email</label>
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="0340998783">
          <label for="floatingInput">Phone Number</label>
          @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control h-75 @error('phone') is-invalid @enderror" name="comment" placeholder="Leave a comment here" id="comment"></textarea>
          <label for="floatingTextarea">Comments</label>
          @error('comment')
          <div class="invalid-feedback">
              {{$message}}
          </div>
        @enderror
        </div>
        <div class="input-group mb-2">
          <button class="btn btn-outline-primary" type="submit" name="button">
            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
        </button>
        </div>
        </form>
      </div>
      <div class="col">
        some details
      </div>
    </div>

    <div class="row">
      <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.0272512914535!2d73.0844536145074!3d33.73411144187651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf7d933cf97b%3A0x8dffdd8a241d58c!2sKhyber%20Pakhtunkhwa%20House!5e0!3m2!1sen!2s!4v1669286941829!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

</div>

@stop