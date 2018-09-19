<section class="ct-mediaSection ct-u-paddingBoth80 ct-decoration--type6 scroll" id="contact" data-height="auto" data-type="video" data-bg-image-mobile="assets/images/main/content/bg-contact.jpg">
    <div class="ct-mediaSection-video embed-responsive embed-responsive-16by9">
        <!-- in order for video to be muted you must add  &amp;api=1&amp;player_id=vimeoplayer1 to the end of the video src
            If you have more than one video, make sure that player_id and id have dif names on each video-->
        <video id="video1" muted loop autoplay="autoplay" preload="auto">
            <source src="assets/videos/contact.mp4" type="video/mp4"/>
            <source src="assets/videos/contact.webm" type="video/webm"/>
        </video>
    </div>
    <div class="container">
        <header class="ct-pageSectionHeader text-center ct-js-animationDynamic">
            <h2 class="ct-js-animation--item ct-motive-text" data-when="span" data-from="0.5" data-to="0" data-opacity="0" data-translatey="-50">
                <span class="ct-u-text--white ct-u-hdr3">get</span> in touch
            </h2>
        </header>
        <div class="row">
            <div class="col-md-12 ct-u-text--white center">
                <div class="ct-item--contact ct-socials--contact">
                    <a href="https://www.facebook.com/mihai.tuhari" class="ct-socials--square-rounded"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/mihaituhari" class="ct-socials--square-rounded"><i class="fa fa-linkedin"></i></a>
                    <a href="http://instagram.com/mihaituhari" class="ct-socials--square-rounded"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="ct-contactForm--type3">
                    <div class="successMessage alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Thank You!
                    </div>
                    <div class="errorMessage alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Ups! An error occured. Please try again later.
                    </div>
                    <form role="form" action="assets/form/send.php" method="post" class="contactForm validateIt"
                          data-email-subject="Contact Form" data-show-errors="true">
                        <div class="row padding-xs-top">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group ct-form-group-label--float">
                                    <input id="contact_name" placeholder="Your name" required type="text" name="field[]" class="form-control input-lg">
                                    <label for="contact_name">Your name *</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group ct-form-group-label--float">
                                    <input id="contact_email" placeholder="Your email" required type="email" name="field[]" class="form-control input-lg">
                                    <label for="contact_email">Your email *</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group ct-form-group-label--float">
                                    <textarea id="contact_message" placeholder="Your message" class="form-control input-lg" rows="4" name="field[]" required></textarea>
                                    <label for="contact_message">Your message *</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-radius btn-lg pull-right">Send
                                    message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
