@extends('layouts.master')
@section('title','Blog')

@section('content')

<div class="container-fluid mt-3">
  <div class="row">
      <div class="col-md-3">
          <div class="card text-center bg-dark shadow-sm">
              <div class="card-body p-2 m-0">
                  <img class="rounded-circle p-2 bg-secondary" height="110px" width="110px" src="https://picsum.photos/50/50" alt="">
                  <div class="h5">LeeCross</div>
                  <div class="h7 text-muted">Fullname : Miracles Lee Cross</div>
                  <div class="h7 mb-0 p-0">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                      etc.
                  </div>
              </div>
              <hr>
              <div class="text-center">
                  <div class="float-start px-3">
                      <div class="h6 text-light">Followers</div>
                      <div class="h5 text-secondary">5.2342</div>
                  </div>
                  <div class="float-end px-3">
                      <div class="h6 text-light">Following</div>
                      <div class="h5 text-secondary">6758</div>
                  </div>
                  <div class="vr vr-blurry p-0" style="height: 60px;"></div>
              </div>
              <div class="card-footer">
                <a href="#" class="text-decoration-none">View Profile</a>
              </div>
          </div>
      </div>
      <div class="col-md-6 gedf-main">

          <!--- \\\\\\\Post-->
          <div class="card bg-dark mb-2">
            <div class="card-header">
              <div class="card-text">Create a post?</div>
            </div>
              <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                        <div class="input-group mb-3">
                          <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                              <label class="sr-only" for="message">post</label>
                              <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                          </div>
                      </div>
                  </div>
                  <div class="btn-toolbar justify-content-between">
                      <div class="btn-group mt-2">
                          <button type="submit" class="btn btn-primary">Post</button>
                      </div>
                      <div class="btn-group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="fa fa-globe"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                              <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Post /////-->

          <!--- \\\\\\\Post-->
          @include('blog.posts')
          <!-- Post /////-->




      </div>
      <div class="col-md-3">
          <div class="card bg-dark mb-2">
              <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
              </div>
          </div>
          <div class="card bg-dark ">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                          card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                  </div>
              </div>
      </div>
  </div>
</div>

@stop