@extends('page.page-layouts.main-page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container text-center">
                <h1 class="text-capitalize text-center" data-aos="zomm-in">We would love to hear from you.</h1>
                <p class="lead">
                    Visit us at {{ config('pagekit.address') }}, Email or via Social Media, we look forward to hearing from you.
                </p>

            </div>
            <div class="row">
                <div class="div">
                    @include('page::partials.messages')
                </div>
                <div class="col-md-6">
                    {{--<h2 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i> Visit Us</h2>--}}

                    {{--<h1 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i></h1>--}}
                    <div class="g-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56109.69065573731!2d-82.58421839793681!3d28.483893056031686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1471476590737"
                                width="100%" height="350" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="col-md-offset-2"></div>
                <div class="col-md-5">
                    {{--<h2 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2>--}}
                    <form id="contact-form" action="/page/send/mail" method="post">
                        {{ csrf_field() }}
                        <p>
                            {{--<label for="full_name">Your Name</label>--}}
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your name">
                        </p>
                        <p>
                            {{--<label for="email">Email</label>--}}
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                        </p>
                        <p>
                            {{--<label for="subject">Subject</label>--}}
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </p>
                        <p>
                            {{--<label for="subject">Message</label>--}}

                            <textarea name="message" id="subject" cols="30" rows="8" class="form-control" placeholder="Message"></textarea>
                        </p>
                        <p class="text-right">
                            <button class="btn btn-success text-capitalize" type="submit">Send And Lets Talk</button>
                        </p>
                    </form>

                </div>
            </div>

            </section>

            <section id="social">
                <div class="container">
                    <p class="lead text-center">
                        VIA SOCIAL MEDIA
                    </p>
                </div>
            </section>

        </div>
    </div>

@endsection
