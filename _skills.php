<?php

$skills = [
    'html' => 'HTML',
    'css' => 'CSS',
    'js' => 'JavaScript',
    'git' => 'GIT',
    'rmq' => 'RabbitMQ',
    'laravel' => 'Laravel',
    'grunt' => 'Grunt',
    'gmaps' => 'Google Maps &amp; Places API',
    'bower' => 'Bower',
    'paypal' => 'PayPal',
    'bootstrap' => 'Bootstrap',
    'es' => 'Elasticsearch',
    'angular' => 'Angular',
    'api' => 'API Development',
    'svn' => 'Subversion',
    'kibana' => 'Kibana',
    'ebay' => 'Ebay API',
    'websockets' => 'Websockets',
    'redis' => 'Redis',
    'amazon' => 'Amazon API',
    'php' => 'PHP',
    'mysql' => 'MySQL',
    'jquery' => 'jQuery',
];
?>
<section class="ct-mediaSection ct-u-paddingBoth80 ct-decoration--type6-rotate" id="services-list">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table>
                    <caption class="text-left ct-u-paddingBottom20">Front-end development</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>HTML, CSS, JavaScript</td>
                    </tr>
                    <tr>
                        <td>Angular, jQuery, Bootstrap, Bower, Grunt, Gulp and much more</td>
                    </tr>
                </table>

                <table>
                    <caption class="text-left ct-u-paddingBottom20">Back-end development</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>PHP, MySQL</td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                    </tr>
                    <tr>
                        <td>API development</td>
                    </tr>
                    <tr>
                        <td>RabbitMQ</td>
                    </tr>
                    <tr>
                        <td>Elasticsearch, Kibana</td>
                    </tr>
                    <tr>
                        <td>WebSockets</td>
                    </tr>
                </table>

                <table>
                    <caption class="text-left ct-u-paddingBottom20">Subversioning</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>GIT, SVN</td>
                    </tr>
                </table>

                <table>
                    <caption class="text-left ct-u-paddingBottom20">API / 3rd Party Integration</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Google Maps, Places &amp; Analytics</td>
                    </tr>
                    <tr>
                        <td>Facebook, Twitter, Google+, LinkedIn</td>
                    </tr>
                    <tr>
                        <td>PayPal</td>
                    </tr>
                    <tr>
                        <td>eBay &amp; Amazon API</td>
                    </tr>
                    <tr>
                        <td>Credit Card Payment Gateways</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table>
                    <caption class="text-left ct-u-paddingBottom20">Other geeky skills</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Advanced Adobe Photoshop/Fireworks Skills</td>
                    </tr>
                    <tr>
                        <td>Medium Web Design Skills</td>
                    </tr>
                    <tr>
                        <td>Google PageSpeed Optimization</td>
                    </tr>
                    <tr>
                        <td>Linux Servers Knowledge</td>
                    </tr>
                    <tr>
                        <td>Responsive CSS Coding</td>
                    </tr>
                    <tr>
                        <td>WordPress Installation</td>
                    </tr>
                    <tr>
                        <td>WordPress Themes and Plugins Installation</td>
                    </tr>
                    <tr>
                        <td>WordPress Customization</td>
                    </tr>
                    <tr>
                        <td>Online Shops Implementation</td>
                    </tr>
                    <tr>
                        <td>Online Applications Development</td>
                    </tr>
                    <tr>
                        <td>Search Engine Optimization (SEO)</td>
                    </tr>
                </table>

                <table>
                    <caption class="text-left ct-u-paddingBottom20">Me & my passions</caption>
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Always happy and optimistic</td>
                    </tr>
                    <tr>
                        <td>Skateboarding
                            <span class="skill-info">(enjoy my <a href="https://www.youtube.com/mihaituhari" target="_blank"/>YouTube</a>
                                channel)</span></td>
                    </tr>
                    <tr>
                        <td>Traveling
                            <span class="skill-info">(check <a href="http://www.badrally.ro/" target="_blank"/>BAD Rally</a>
                                project)</span></td>
                    </tr>
                    <tr>
                        <td>Off-Road <span class="skill-info">(see <a href="http://www.rescue4x4.ro/" target="_blank"/>Rescue 4x4</a>
                                project)</span></td>
                    </tr>
                    <tr>
                        <td>Photography
                            <span class="skill-info">(see my dedicated <a href="https://www.facebook.com/tuharifoto" target="_blank"/>Facebook</a>
                                page)</span></td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="logos">
                    <?php

                    foreach ($skills as $key => $name) {
                        echo '<li class="' . $key . '" data-toggle="tooltip" title="' . $name . '">' . $name . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
