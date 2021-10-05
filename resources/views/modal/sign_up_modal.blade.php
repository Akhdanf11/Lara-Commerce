<!-- Modal -->
<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>

             </ul>
          <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="login_form">
                      <form action="{{ route('login') }}" method="post">
                        @csrf
                          <div class="heading">
                              <h3 class="text-center">Login to your account</h3>
                              <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                          </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Email Address">
                              @error('email')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                              @error('password')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                          <div class="form-group custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                            <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                            {{-- <form action="{{ route('email') }}" method="post"> --}}
                                  @csrf
                                  <a class="tdu btn-fpswd float-right" href="{{ route('email') }}">Forgot Password?</a>
                            {{-- </form> --}}
                        </div>
                          <hr>
                          <div class="row mt40">
                              <div class="col-lg">
                                  <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                              </div>
                              <div class="col-lg">
                                  <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="sign_up_form">
                      <div class="heading">
                          <h3 class="text-center">Create New Account</h3>
                          <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                      </div>
                      <form action="{{ route('register') }}" method="post">
                        @csrf
                          <div class="form-group">
                              <input type="text" class="form-control" name="name" placeholder="Username">
                              @error('name')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Email Address">
                              @error('email')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                              @error('password')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" name="repassword" placeholder="Confirm Password">
                              @error('repassword')
                                  <div class="text-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="form-group custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                              <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                          </div>
                          <button  type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                          <hr>
                          <div class="row mt40">
                              <div class="col-lg">
                                  <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                              </div>
                              <div class="col-lg">
                                  <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
          </div>
      </div>
    </div>
</div>
