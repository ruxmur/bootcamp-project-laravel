{{--@extends('layout')--}}

{{--@section('content')--}}
{{--<div class="card">--}}
{{--    <div class="row">--}}
{{--        <div class="col cart">--}}
{{--            <div class="title">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <h4><b>Shopping Cart</b></h4>--}}
{{--                    </div>--}}
{{--                    <div class="col align-self-center text-end text-muted">3 items</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row border-top border-bottom">--}}
{{--                <div class="d-flex item__content align-items-center">--}}
{{--                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="row text-muted">Tour</div>--}}
{{--                        <div class="row">Explore Orhei reserve</div>--}}
{{--                    </div>--}}
{{--                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>--}}
{{--                    <div class="col text-center">&euro; 44.00 </div>--}}
{{--                    <div class="col close text-center">&#10005;</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="d-flex item__content align-items-center">--}}
{{--                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="row text-muted">Tour</div>--}}
{{--                        <div class="row">Explore Orhei reserve</div>--}}
{{--                    </div>--}}
{{--                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>--}}
{{--                    <div class="col text-center">&euro; 25.00 </div>--}}
{{--                    <div class="col text-center close">&#10005;</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row border-top border-bottom">--}}
{{--                <div class="d-flex item__content align-items-center">--}}
{{--                    <div class="col-2 text-center"><img class="img-fluid item__image" src=""></div>--}}
{{--                    <div class="col text-center">--}}
{{--                        <div class="row text-muted">Tour</div>--}}
{{--                        <div class="row">Explore Orhei reserve</div>--}}
{{--                    </div>--}}
{{--                    <div class="col text-center"> <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> </div>--}}
{{--                    <div class="col text-center">&euro; 60.00 </div>--}}
{{--                    <div class="col text-center close">&#10005;</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="d-column justify-content-center cart__summary">--}}
{{--            <div>--}}
{{--                <h5 class="cart__summary_title"><b>Summary</b></h5>--}}
{{--            </div>--}}
{{--            <hr>--}}
{{--            <div class="row">--}}
{{--                <div class="col text-center" >ITEMS 3</div>--}}
{{--                <div class="col text-center">&euro; 132.00</div>--}}
{{--            </div>--}}
{{--            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">--}}
{{--                <div class="col text-center">TOTAL PRICE</div>--}}
{{--                <div class="col text-center">&euro; 137.00</div>--}}
{{--            </div> --}}
{{--            <button class="summary__btn">ORDER</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="back-to-shop"><a href="{{ route('tourism') }}">&leftarrow;<span class="text-muted">Back to shop</span></a></div>--}}
{{--</div>--}}
{{--@endsection --}}




{{-- .title {
    margin-bottom: 5vh;
}

.card {
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold;
    margin: auto;
    max-width: 950px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}

@media(max-width:767px) {
    .card {
        margin: 3vh auto;
    }
}

.cart {
    background-color: #fff;
    padding: 20px 20px;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
}

@media(max-width:767px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}

.cart__summary {
    background-color: #ddd;
    border-bottom-left-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65);
}

@media(max-width:767px) {
    .cart__summary {
        border-top-right-radius: unset;
        border-bottom-left-radius: 1rem;
    }
}

.cart__summary .col-2 {
    padding: 0;
}

.cart__summary .col-10 {
    padding: 0;
}

.row {
    margin: 0;
}

.title b {
    font-size: 1.5rem;
}

.item__content {
    /* margin: 0; */
    padding: 2vh 0;
    width: 100%;
}

/* .col-2,
.col {
    padding: 0 1vh;
} */

a {
    padding: 0 1vh;
}

.close {
    margin-left: auto;
    font-size: 0.7rem;
}

.item__image {
    width: 3.5rem;
}

.back-to-shop {
    margin-top: 4.5rem;
}

.cart__summary_title{
    margin-top: 4vh;
}

hr {
    margin-top: 1.25rem;
}

.summary__btn {
    background-color: #000 !important;
    border-color: #000 !important;
    color: white !important;
    width: fit-content;
    font-size: 0.7rem;
    margin-top: 4vh;
    padding: 10px 30px;
    border-radius: 0;
}

.summary__btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    transition: none;
}

.summary__btn:hover {
    color: white;
}

a {
    color: black;
}

a:hover {
    color: black;
    text-decoration: none;
}

#code {
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
} --}}
