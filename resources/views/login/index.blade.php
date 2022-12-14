@extends('login.master')

@section('content')
<div class="app-content content container-fluid">
    <div class="content-wrapper">
          <div class="content-header row"></div>
          <div class="content-body">
              <section class="mt-2">
                  <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                      <div class="card border-grey border-lighten-3 m-0">
                      <div class="card-header no-border">
                          <div class="card-title text-xs-center">
                              <div class="p-1"><img src="{{ asset ('robust/app-assets/images/logo/aa-city-admin.png') }}" alt="branding logo"></div>
                          </div>
                          <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3"><span>Login</span></h6>
                      </div>
                      <div class="card-body collapse in">
                          <div class="card-block">
                              <form class="form-horizontal form-simple" action="" novalidate method="POST">
                                @csrf
                                  <fieldset class="form-group position-relative has-icon-left mb-0">
                                      <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="user-name" placeholder="Your Username" required>
                                      <div class="form-control-position">
                                          <i class="icon-head"></i>
                                      </div>
                                  </fieldset>
                                  <fieldset class=" mt-2 form-group position-relative has-icon-left">
                                      <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="user-password" placeholder="Enter Password" required>
                                      <div class="form-control-position">
                                          <i class="icon-key3"></i>
                                      </div>
                                  </fieldset>
                                  <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                              </form>
                          </div>
                      </div>
                      <div class="card-footer">
                          <div class="">
                              <p class="float-sm-left text-xs-center m-0"><a href="recover-password.html" class="card-link">Addis Ababa women and children</a></p>
                          </div>
                      </div>
                  </div>
                  </div>
              </section>
          </div>
    </div>
  </div>
@endsection