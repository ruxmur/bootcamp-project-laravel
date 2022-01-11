@extends('layout')
@section('content')
<section class="contact bg_grey ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 banner_img text-white">
        <div class="col-md-8 img_opacity">
        </div>
      </div>
    </div>
  </div>
</section>
<div>
  <h4><i class="fa fa-calendar"></i>Make Reservations in Minutes</h4>
</div>
<div class="row">
  <div class="col-md-4 order-md-2 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Your cart</span>
      <span class="badge badge-secondary badge-pill">3</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Product name</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$100</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Second product</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$800</span>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Third item</h6>
          <small class="text-muted">Brief description</small>
        </div>
        <span class="text-muted">$3.500</span>
      </li>
      <li class="list-group-item d-flex justify-content-between bg-light">
        <div class="text-success">
          <h6 class="my-0">Promo code</h6>
          <small>EXAMPLECODE</small>
        </div>
        <span class="text-success">$25%</span>
      </li>
      <li class="list-group-item d-flex justify-content-between">
        <span>Total (USD)</span>
        <strong>$20</strong>
      </li>
    </ul>
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
    <form action="{{ route('contactUs.send') }}" method="POST" name="contact-form" class="card p-2">
      <!-- {{ csrf_field() }} -->
      <div class="input-group">
        <input name="promoCode" type="text" value="{{ old('promo code') }}" class="form-control " placeholder="Promo code">
        <div class="input-group-append">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </div>
    </form>

  </div>
  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Billing address</h4>
    <form class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="firstName">First name</label>
          <input name="firstName" type="text" value="{{ old('first name') }}" class="form-control" id="firstName" placeholder="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="lastName">Last name</label>
          <input name="lastName" type="text" value="{{ old('last name') }}" class="form-control" id="lastName" placeholder="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="email">Email</label>
        <input name="email" type="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="you@example.com">
        <div class="invalid-feedback">
          Please enter a valid email address for shipping updates.
        </div>
      </div>

      
      <div class="mb-3">
        <label for="telNo">Telephone / Mobile</label>
        <input name="telNo" type="tel" value="{{ old('telNo') }}" class="form-control" id="tel" placeholder="+(1) 000 000 000">
      </div>

      <div>
        <div class="col-md-13 mb-3">
          <label for="sex">Sex</label>
          <select class="custom-select d-block w-100" id="sex" required>
            <option value="">Choose...</option>
            <option>Female</option>
            <option>Male</option>
          </select>
          </div>
      </div>

      <div>
        <div class="col-md-13 mb-3">
          <label for="membership">Membership</label>
          <select class="custom-select d-block w-100" id="membership" required>
            <option value="">Choose...</option>
            <option>Trial - 1 month</option>
            <option>Standart - 12 month</option>
            <option>Premium - 36 month</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid type of membership.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="sport">Sport</label>
          <select class="custom-select d-block w-100" id="sport" required>
            <option value="">Choose...</option>
            <option>Aerobic exercise</option>
            <option>Box</option>
            <option>Cardio</option>
            <option>CrossFit</option>
            <option>Stretching</option>
            <option>Strenght training</option>
            <option>Yoga</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid type of sport.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="coach">Coach</label>
          <select class="custom-select d-block w-100" id="coach" required>
            <option value="">Choose...</option>
            <option>Alex</option>
            <option>Kevin</option>
            <option>Lana</option>
            <option>Mark</option>
            <option>Rockwell</option>
            <option>Ruth</option>
            <option>Tom</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid coach.
          </div>
        </div>
      </div>
      <div class="form-group col-sm-13">
        <textarea name="message" class="form-control form-control-lg mb-2" placeholder="Message" rows="6"></textarea>
      </div>
      <hr class="mb-4">

      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info">Save this information for next time</label>
      </div>
      <hr class="mb-4">

      <h4 class="mb-3">Payment</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="credit">Credit card</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="cash" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="cash">Cash</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">Paypal</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="cc-name">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required>
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="cc-number">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required>
          <div class="invalid-feedback">
            Credit card number is required
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <label for="cc-expiration">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="cc-expiration">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
    @csrf
    </form>
  </div>
</div>
@endsection