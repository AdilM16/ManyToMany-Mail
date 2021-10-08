<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div>
                <form style="width: 100%" action="{{ route('sendMail') }}" method="POST" role="form"
                    class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="form-group mt-3 w-100">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group mt-3 w-100">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
