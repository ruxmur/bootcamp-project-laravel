@extends('layout')
@section('content')
<section class="contact bg_grey" >
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 banner_img text-white">
          <div class="col-md-6 img_opacity">
            <img src="./images/We Are Just a Step Closer.png" alt="img" class="img-fluid img_1" />
            <img src="./images/content.png" alt="img" class="img-fluid img_2" />
          </div>
        </div>
      </div>

      <div class="col-md-2 ml-auto rectangle_1"></div>
    </div>
  </section>

  <section class="contact_us bg_contact">
    <div class="container bg_light bg-white">
      <div class="row">
        <div class="col-md-5">
          <div class="col-md-1 top_square bg-dark"></div>
          <h4 class="mb-3">
            Contact Us
          </h4>
          <h5 class="hide_1">Find Us and Connect</h5>
          <h5 class="know_more text-center">
            Know More About Our History
          </h5>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          <form action="{{ route('contactUs.send') }}" method="POST" name="contact-form" >
            {{ csrf_field() }}   
            <!-- @csrf -->
            <div class="form-row">
              <div class="form-group col-md-12">
                <input name="name" type="text" value="{{ old('name') }}" class="form-control form-control-lg mt-3 mb-2" placeholder="Name" />
              </div>
              <div class="form-group col-md-12">
                <input name="email" type="email" value="{{ old('email') }}" class="form-control form-control-lg mb-2" placeholder="E-mail Address" />
              </div>
              <div class="form-group col-sm-12">
                <textarea name="message" class="form-control form-control-lg mb-2" placeholder="Message" rows="6"></textarea>
              </div>
              <div class="form-group col-md-12">
                <input type="submit" class="btn btn-primary btn-block mb-3" value="Send Message" />
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-5 ml-auto text-white pt- pb-4 bg_dark">
          <div class="pt-5 px-4">
            <img src="./images/email.png" alt="img" class="img-fluid" />
            <p class="ml-5">joinus@power.com</p>
          </div>

          <div class="pt-5 px-4">
            <img src="./images/map.png" alt="img" class="img-fluid" />
            <p class="ml-5">125/3 S.Lincoln St., Washington DC </p>
          </div>

          <div class="pt-5 px-4">
            <img src="./images/phone.png" alt="img" class="img-fluid" />
            <p class="ml-5">202.458.6016</p>
          </div>

          <div class="pt-5 px-4">
            <img src="./images/wall-clock.png" alt="img" class="img-fluid" />
            <p class="ml-5">Weekdays Monday - Friday 07:00 - 21:00</p>
            <p class="ml-5">Weekdays Saturday - Sunday 09:00 - 19:00</p>
          </div>
        </div>

        <div class="col-md-2 right_block"></div>
      </div>
    </div>
  </section>

  <div class="container-fluid padding py-5">
    <div class="row">
      <div class="col-12">
        <p class="google__maps">
          <iframe id="maps"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49585.36384389782!2d-76.96125934403132!3d39.03617588340584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c375724da991%3A0x675f88e616c0377b!2sBeltsville%2C%20MD%2C%20USA!5e0!3m2!1sen!2sng!4v1593515416673!5m2!1sen!2sng"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </p>
      </div>
    </div>
  </div>
@endsection


