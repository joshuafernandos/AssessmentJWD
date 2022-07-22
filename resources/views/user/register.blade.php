@extends('layouts.user')

@section('body')
<section class="vh-100" style="background-color: #7da0ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-5">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="http://source.unsplash.com/500x760?bus"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="/regist" method="POST">
                    @csrf  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create account</h5>
  
                    <div class="form-outline">
                      <label class="form-label" for="form2Example17">Name</label>
                      <input type="text" id="form2Example17" name="name" class="form-control form-control-lg" required/>
                    </div>
  
                    <div class="form-outline">
                      <label class="form-label" for="form2Example17">Username</label>
                      <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" required/>
                    </div>
  
                    <div class="form-outline">
                      <label class="form-label" for="form2Example17">Email address</label>
                      <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" required/>
                    </div>
  
                    <div class="form-outline">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" required/>
                    </div>
  
                    <div class="d-grid gap-2 d-md-block mb-4">
                      <button type="submit" class="btn btn-primary" type="button">Register</button>
                    </div>
  
                    <p class="pb-lg-2" style="color: #393f81;">Already have account? <a href="/login"
                        style="color: #393f81;">Login here</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection