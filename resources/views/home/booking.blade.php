@extends('layout')
@section('content')
<section class="header pb-5" id="header">
    <div class="container-fluid">
      <div class="row height-max image-header

                align-items-center" style="background-image: url(images/jonathan.jpg);">
        <div class="col-12 h-info d-flex justify-content-center
                    align-items-center col-lg-6 img-section">

          <div class="sub-info ">
            <h1>What POWER <br> is About</h1>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              A pariatur recusandae maxime accusamus nam quaerat nulla tempora 
              sunt ex blanditiis ducimus error voluptas, neque illo alias eum. 
              Dolor, quod asperiores.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="smart-wrap">
    <div class="smart-forms smart-container wrap-2">
     
      <div class="form-header header-red">
        <h4><i class="fa fa-calendar"></i>Make Reservations in Minutes</h4>
      </div>
       
      <form method="post" action="/" id="booking-form">
        <div class="form-body">
         
         <!-- OUR FORM ELEMENTS WILL GO HERE -->                                               
           
        </div>
        <div class="form-footer">
          <button type="submit" class="button btn-primary">Confirm Booking</button>
          <button type="reset" class="button">Cancel</button>
        </div>
        <div class="section">
          <label for="guestname" class="field-label">Please Enter Your Name</label>
          <label for="guestname" class="field prepend-icon">
            <input type="text" name="guestname" id="guestname" class="gui-input" required="" placeholder="John Smith/Jane Smith">
            <span class="field-icon"><i class="fa fa-user"></i></span>  
          </label>
        </div>
                       
        <div class="frm-row">
          <div class="section colm colm6">
            <label for="guestemail" class="field-label">Email Address</label>
            <label for="guestemail" class="field prepend-icon">
              <input type="email" name="guestemail" id="guestemail" class="gui-input" required="" placeholder="john@something.com">
              <span class="field-icon"><i class="fa fa-envelope"></i></span>  
            </label>
          </div>
           
          <div class="section colm colm6">
            <label for="guestelephone" class="field-label">Telephone / Mobile</label>
            <label for="guestelephone" class="field prepend-icon">
              <input type="text" name="guestelephone" id="guestelephone" class="gui-input" required="" placeholder="Telephone / Moble Number">
              <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
            </label>
          </div>
        </div>
        
        <div class="frm-row">
          <div class="section colm colm6">
            <label for="checkin" class="field-label">Check-in Date</label>
            <label for="checkin" class="field prepend-icon">
              <input type="text" id="checkin" name="checkin" class="gui-input" required="" placeholder="mm/dd/yyyy">
              <span class="field-icon"><i class="fa fa-calendar"></i></span>  
            </label>
          </div>
           
          <div class="section colm colm6">
            <label for="checkout" class="field-label">Check-out Date</label>
            <label for="checkout" class="field prepend-icon">
              <input type="text" id="checkout" name="checkout" class="gui-input" required="" placeholder="mm/dd/yyyy">
              <span class="field-icon"><i class="fa fa-calendar"></i></span>  
            </label>
          </div>
        </div>
         
        <div class="spacer-t20 spacer-b30">
          <div class="tagline"><span>Please select wich sport do you want</span></div>
        </div>
        <div class="frm-row">
          <div class="option-group field">
           
            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch1" id="switch1" value="switch1">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Aerobic_exercise</span>
              </label>
            </div>
                 
            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Box</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Cardio</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>CrossFit</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Stretching</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Strenght_training</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Yoga</span>
              </label>
            </div>    
          </div>
        </div>
         

        <div class="spacer-t20 spacer-b30">
          <div class="tagline"><span>Please choose who will be your coach</span></div>
        </div>
        <div class="frm-row">
          <div class="option-group field">
           
            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch1" id="switch1" value="switch1">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Alex</span>
              </label>
            </div>
                 
            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Lana</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Rockwell</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Kevin</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Ruth</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Mark</span>
              </label>
            </div>

            <div class="section colm colm6">
              <label class="switch">
                <input type="checkbox" name="switch2" id="switch2" value="switch2">
                <span class="switch-label" data-on="YES" data-off="NO"></span>
                <span>Tom</span>
              </label>
            </div>    
          </div>
        </div>
         
         
        <div class="section">
          <label for="comment" class="field-label">Anything else we should know about?</label>
          <label for="comment" class="field prepend-icon">
            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Let us know about any special accommodation needs"></textarea>
            <span class="field-icon"><i class="fa fa-comments"></i></span>
            <span class="input-hint"> 
              <strong>Please:</strong> Be as descriptive as possible
            </span>  
            <button type="submit" class="button btn-red">Confirm Booking</button>
           <label class="switch switch-red">          
          </label>
        </div>
      </form>
       
    </div>
  </div>
@endsection