<?php

$testimonials = [
    'miro' => [
        'author' => 'Miroslav Kubicek',
        'project' => 'Miro Door, Miro Agency',
        'content' => 'Developing something amazing is always very hard task. Although still hard, it gets easier when Mihai is involved. To have him on board made things so much cleaner, faster and easier for me.<br/><br/>His expertise in the field is irreplaceable, but the greatest thing about working with Mihai is the fact that he gets it. Right from the start he understood what we were trying to achieve, even when I wasn\'t really sure my self on certain points, he filled in the gaps. True pleasure!',
    ],
    'marco' => [
        'author' => 'Marco Sanchez',
        'project' => 'Tijar Fashion',
        'content' => 'My experience working with Mihai was wonderful! He has the ability to solve any problem with ease and professionalism, service and customer care are unbeatable.<br/><br/>The requested job was very complicated in terms of programming and it was amazing how quick and easily he is treating any subject, also emphasize the high level of commitment to work and delivery times.',
    ],
    'bonacci' => [
        'author' => 'Ross Bonacci',
        'project' => 'Looking to Buy Art',
        'content' => 'I have known Mihai for 3 years. Mihai is an excellent developer/programmer with great knowledge on systems he has developed. He is extremely responsive with implementing new features and resolving issues.<br/><br/>I would not hesitate to recommend him for any development/programming needs.',
    ],
    'bron' => [
        'author' => 'Bron Schmerl',
        'project' => 'Director, BCreative Pty Ltd',
        'content' => 'As well as an expert in his field, Mihai is very adaptable and communicative with all levels of our company, from creative to end client.<br/><br/>His knowledge and skill also allows us to call on him for consultation, functionality advice and problem solving. Mihai is an extremely efficient developer and turnaround times exceed expectations. He is a pleasure to work with and a rare find.',
    ],
    'michelle' => [
        'author' => 'Michelle Ashton-Duffell',
        'project' => 'Savvy Brides',
        'content' => 'Mihai\'s work is incredible, his knowledge & skill is amazing.<br/><br/>He made my website come to life with such ease & flair. His is undeniable, he gets the task immediately & knows exactly what to do. I would definitely recommend him to anyone & everyone. He is an absolute find!!',
    ],
    'karim' => [
        'author' => 'Karim Karimov',
        'project' => 'Barcelona-Baku Trade Center',
        'content' => 'Mihai is smart, experienced, creative, honest guy and during our collaboration he was super responsive to all my questions. If you are looking for highly skilled web developer I would recommending his services. I am really satisfied with his work.<br/><br/>Just wanted to say thank you for our amazing website and we look forward to working with you in the future!',
    ],
];
?>
<section class="ct-mediaSection ct-decoration--type6 ct-u-paddingBoth80 scroll" id="testimonials" data-stellar-background-ratio="0.3" data-height="auto" data-type="parallax" data-bg-image="assets/images/main/content/testimonials-bg.jpg" data-bg-image-mobile="assets/images/main/content/testimonials-bg.jpg">
    <div class="ct-mediaSection-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="ct-pageSectionHeader text-center ct-js-animationDynamic">
                        <h2 class="ct-js-animation--item ct-motive-text their-testimonials" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="-50">
                            <span class="ct-u-text--white ct-u-hdr3">their</span> testimonials <em>* no bullshit</em>
                        </h2>
                    </header>
                    <div class="ct-divider ct-divider--type6 text-center">
                        <div class="ct-line ct-line--left"></div>
                        <img src="assets/images/main/divider-icon.png" alt="">
                        <div class="ct-line ct-line--right"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flexslider ct-js-flexslider ct-flexslider--arrowType2" data-controlnav="false" data-directionnav="true" data-animationloop="true">
            <ul class="slides ct-u-text--white">
                <?php

                foreach ($testimonials as $testimonial) {
                    ?>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?= $testimonial['content'] ?></p>
                                    <div class="ct-text-signature text-center">
                                        <span class="text-capitalize"><?= $testimonial['author'] ?></span>
                                        <p><?= $testimonial['project'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php

                }
                ?>
            </ul>
        </div>
    </div>
</section>
