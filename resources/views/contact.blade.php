@extends('layout.article')
@section('content')
<!--subscription strat -->
<section id="contact"  class="subscription">
    <div class="container">
    <div>
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
    </div>
        <h2 class="text-center">{{ __('messages.contactForm') }}</h2>
        <form action="{{ route('contact_mail') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="subscribe-title text-center">
            <h2>
                do you want to contact with us?
            </h2>
            <p>
                Please fill out the form below to send us an email and we will get back to you as soon as possible.

            </p>
        </div>
        <div class="row">
          <div class="col-sm-12">
                <div class="subscription-input-group">
                        <input type="text" class="subscription-input-form" name="name" placeholder="Your Name">
                        
                 
                </div>
            </div>	
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                  
                        <input type="email" class="subscription-input-form"name="email" placeholder="Enter your email here">
                        
                   
                </div>
            </div>	
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                  
                        <input type="text" class="subscription-input-form"name="message" placeholder="Leave a message here">
                        <div class="col-12">
                        </form>
                         <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </form>
                        </div>
                    
                </div>
            </div>	
        </div>
    </div>

</section><!--/subscription-->	
<!--subscription end -->
@endsection