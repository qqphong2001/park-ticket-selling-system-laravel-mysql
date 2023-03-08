@extends('aboutus.layouts')
@section('aboutus-content')
    <!-- start contact section -->
    <section id="aa-contact">

        <div class="aa-contact-area">
            <div class="aa-contact-top">
                <h2>We are wating to assist you..</h2>

            </div>
            <!-- contact map -->
            <div class="aa-contact-map">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.946079581521!2d-74.14020018461424!3d40.454330379360634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c234321c39bc89%3A0x6cb5a28af2faa229!2sRunaway%20Rapids%20Waterpark!5e0!3m2!1svi!2s!4v1677583342212!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    width="200%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            <!-- Contact address -->
            <div class="aa-contact-address">
                <div class="row">
                    <div class="col-md-8">
                        <div class="aa-contact-address-left">
                            <form class="comments-form contact-form" action="/contact-send" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject" class="form-control" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Company" class="form-control" name="company">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="3" placeholder="Message" name="message"></textarea>
                                </div>
                                <button class="aa-secondary-btn">Send</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aa-contact-address-right">
                            <address>
                                <h4>Keansburg Park</h4>

                                <p><span class="fa fa-home"></span>275 Beachway Avenue, Keansburg, NJ 07734</p>
                                <p><span class="fa fa-phone"></span>732-495-1400</p>
                                <p><span class="fa fa-envelope"></span>Email: keansburgpark@gmail.com</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
