<?php

$works = [
    's24' => [
        'name' => 'supermercato24',
        // 'subtitle' => 'search engine',
        'url' => 'supermercato24.it',
        'info' => 'PHP, MySQL, Elasticsearch, Kibana, RabbitMQ, Laravel, HTML, CSS, JS, jQuery, Angular, Bower, Grunt',
    ],
    'sunglass' => [
        'name' => 'Sunglass Curator',
        'url' => 'sunglasscurator.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Laravel, Instagram API, Braintree Payment Gateway',
    ],
    'musicmap' => [
        'name' => 'Musicmap',
        'url' => 'musicmap.global',
        'info' => 'Angular, HTML, CSS, LESS, JS, jQuery, Gulp',
    ],

    'mirodoor' => [
        'name' => 'Miro Door',
        'url' => 'mirodoor.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Instagram API',
    ],
    'people' => [
        'name' => 'People iOS App',
        'url' => '',
        'info' => 'iOS App backend development. PHP, MySQL, Laravel, WebSockets, RabbitMQ, Apple Notifications, API development, HTML, CSS, JS, jQuery, Google Places API, Google Geocoding API',
    ],
    'lookingtobuyart' => [
        'name' => 'Looking to Buy Art',
        'url' => 'lookingtobuyart.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Laravel, PayPal payment integration',
    ],
    'setteo-referee' => [
        'name' => 'Setteo Referee App',
        'url' => 'setteo.com',
        'info' => 'Angular, WebSockets, HTML, CSS, JS',
    ],
    'marias' => [
        'name' => 'Marias Florist',
        'url' => 'mariasflorist.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Laravel, Credit Card Payment integration, PayPal payment integration, SEO',
    ],
    'savvy' => [
        'name' => 'Savvy Brides',
        'url' => 'savvybrides.com.au',
        'info' => 'WordPress setup &amp; customization. PHP, HTML, CSS, JS, jQuery',
    ],

    'mytrip100tracks' => [
        'name' => '100Tracks My Trip',
        'url' => 'mytrip.100tracks.net',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Google Maps API',
    ],
    'setteo-scoreboard' => [
        'name' => 'Setteo Scoreboard App',
        'url' => 'setteo.com',
        'info' => 'Angular, WebSockets, HTML, CSS, JS',
    ],
    'bbtc' => [
        'name' => 'Barcelona-Baku Trade Center',
        'url' => 'bbtradecenter.com',
        'info' => 'Laravel, PHP, MySQL, HTML, CSS, JS, jQuery, Page Speed Optimization',
    ],
    'bmc' => [
        'name' => 'BMC',
        'url' => '',
        'info' => 'Arbitrage system between Amazon &amp; eBay. PHP, MySQL, Laravel, RabbitMQ, eBay API, Amazon API, HTML, CSS, JS, jQuery',
    ],
    'tijar' => [
        'name' => 'Tijar Fashion',
        'url' => '',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Laravel, Credit Card Payment integration, PayPal payment integration, API development',
    ],
    'level18' => [
        'name' => 'Level Eighteen',
        'url' => 'leveleighteen.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery',
    ],
    'alexandrucostin' => [
        'name' => 'Alexandru Costin',
        'url' => 'alexandrucostin.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery',
    ],
    'booth' => [
        'name' => 'Booth St Bistro',
        'url' => 'boothstbistro.com',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery',
    ],
    'socialdiary' => [
        'name' => 'Social Diary',
        'url' => 'socialdiary.com.au',
        'info' => 'PHP, MySQL, HTML, CSS, JS, jQuery, Credit Card Payment integration, PayPal payment integration',
    ],
];
?>

<section class="ct-mediaSection ct-decoration--type6-rotate ct-u-paddingBoth80 scroll" id="works">
    <div class="container">
        <header class="ct-pageSectionHeader text-center">
            <h2 class="ct-js-animation--item ct-motive-text" data-when="enter" data-from="0" data-to="1" data-opacity="0" data-translatey="-50">
                <span class="ct-u-hdr3">happy</span> clients</h2>
        </header>
        <div class="row ct-gallery">
            <?php

            $work_i = 1;
            foreach ($works as $key => $details) {
                if ($details['url']) {
                    $title = "&lt;a rel='nofollow' href='http://" . $details['url'] . "' target='_blank'&gt;Visit " . $details['name'] . "&lt;/a&gt;";
                } else {
                    $title = 'Confidential project';
                }
                ?>
                <div class="col-sm-6 col-md-4 ct-u-paddingBottom50">
                    <a class="ct-js-magnificPopupImage" href="assets/images/projects/project-<?= $key ?>-big.jpg" title="<?= $title ?>">
                        <figure class="ct-hover ct-hover-type7">
                            <img src="assets/images/projects/project-<?= $key ?>-small.jpg" alt="<?= $details['name'] ?>">
                            <figcaption>
                                <h2>
                                    <?= $details['name'] ?>
                                    <?php

                                    if (isset($details['subtitle'])) {
                                        echo '<small>' . $details['subtitle'] . '</small>';
                                    }
                                    ?>
                                </h2>
                                <p><?= ($details['url'] ?: 'Confidential project') ?></p>
                            </figcaption>
                        </figure>
                    </a>
                    <div class="work-info">
                        <em><?= ($details['url'] ? '<a rel="nofollow" href="http://' . $details['url'] . '" target="_blank">' . $details['url'] . '</a>' : 'Confidential project') ?></em>
                        / <?= (isset($details['subtitle']) ? '<small>' . $details['subtitle'] . '</small> / ' : '') ?> <?= $details['info'] ?>
                    </div>
                </div>
                <?php

                $work_i++;

                if ($work_i % 3 == 1) {
                    ?>
                    <div class="clearfix visible-lg"></div>
                    <?php

                }
            }
            ?>
        </div>
    </div>
</section>
