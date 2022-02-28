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
        <div class="col-md-3 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            </h4>
            <p>Select a date: <input type="text" name="foo"></p>
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
            <form action="{{ route('contactUs.send') }}" style="height: 300px;" method="POST" name="contact-form" class="card p-2">
                <div class="input-group">
                    <input name="promoCode" type="text" value="{{ old('promo code') }}" class="form-control "
                           placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" style="margin-top: 0.5vw">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6 order-md-1">
            <h4 class="mb-3">Contact Us</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input name="firstName" type="text" value="{{ old('first name') }}" required="required"
                               class="form-control" id="firstName" placeholder="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input name="lastName" type="text" value="{{ old('last name') }}" required="required"
                               class="form-control" id="lastName" placeholder="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input name="email" type="email" value="{{ old('email') }}" required="required" class="form-control"
                           id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telNo">Telephone / Mobile</label>
                    <input name="telNo" type="tel" value="{{ old('telNo') }}" required="required" class="form-control"
                           id="tel" placeholder="+(1) 000 000 000">
                </div>
                <div>
                    <div class="col-md-13 mb-3">
                        <label for="sex">Sex</label>
                        <select class="custom-select d-block w-100" id="sex" required>
                            <option value="">Choose...</option>
                            <option @if(old('sex')==='female' ) selected @endif value="female">Female</option>
                            <option @if(old('sex')==='male' ) selected @endif value="male">Male</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="col-md-13 mb-3">
                        <label for="membership">Membership</label>
                        <select class="custom-select d-block w-100" id="membership" required>
                            <option value="">Choose...</option>
                            <option @if(old('membership')==='trial' ) selected @endif value="trial">Trial - 1 month
                            </option>
                            <option @if(old('membership')==='standart' ) selected @endif value="standart">Standart - 12
                                month
                            </option>
                            <option @if(old('membership')==='premium' ) selected @endif value="premium">Premium - 36
                                month
                            </option>
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
                            <option @if(old('sport')==='aerobicExercise' ) selected @endif value="aerobicExercise">
                                Aerobic exercise
                            </option>
                            <option @if(old('sport')==='box' ) selected @endif value="box">Box</option>
                            <option @if(old('sport')==='cardio' ) selected @endif value="cardio">Cardio</option>
                            <option @if(old('sport')==='crossFit' ) selected @endif value="crossFit">CrossFit</option>
                            <option @if(old('sport')==='stretching' ) selected @endif value="stretching">Stretching
                            </option>
                            <option @if(old('sport')==='strenghtTraining' ) selected @endif value="strenghtTraining">
                                Strenght training
                            </option>
                            <option @if(old('sport')==='yoga' ) selected @endif value="yoga">Yoga</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid type of sport.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="coach">Coach</label>
                        <select class="custom-select d-block w-100" id="coach" required>
                            <option value="">Choose...</option>
                            <option @if(old('coach')==='alex' ) selected @endif value="alex">Alex</option>
                            <option @if(old('coach')==='kevin' ) selected @endif value="kevin">Kevin</option>
                            <option @if(old('coach')==='lana' ) selected @endif value="lana">Lana</option>
                            <option @if(old('coach')==='mark' ) selected @endif value="mark">Mark</option>
                            <option @if(old('coach')==='rockwell' ) selected @endif value="rockwell">Rockwell</option>
                            <option @if(old('coach')==='ruth' ) selected @endif value="ruth">Ruth</option>
                            <option @if(old('coach')==='tom' ) selected @endif value="tom">Tom</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid coach.
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm-13">
                    <textarea name="message" class="form-control form-control-lg mb-2" placeholder="Message"
                              rows="6">{{ old('message') }}</textarea>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4">
                @csrf
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
@endsection
