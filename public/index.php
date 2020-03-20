<?php
require_once __DIR__ . '/lib/I18N.php';
I18N::load();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= __("Covid-19 solidarity") ?></title>

    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="apple-touch-icon" sizes="57x57" href="./apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:image:height" content="304">
    <meta property="og:image:width" content="580">
    <meta property="og:title" content="<?= __("Would you like to give your neighbour a helping hand?") ?>">
    <meta property="og:description"
          content="<?= __('Join the movement and propose to help your neighbour by grocery shopping for them to provide for their basic needs.') ?>">
    <meta property="og:url" content="http://www.covid-solidarity.org">
    <meta property="og:image" content="http://www.covid-solidarity.org/assets/img/og-image.jpg">
    <meta name="google-analytics" content="GTM-TB48ZGS"/>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-TB48ZGS');</script>
    <!-- End Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160690896-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
      gtag('config', 'UA-160690896-1');
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TB48ZGS" height="0" width="0"
                      style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="app" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPageElement">
        <header class="app-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="./" data-aos="fade-right" data-aos-delay="200">
                        <img src="./assets/img/logo.svg" alt="covid-19 solidarity logo">
                    </a>

                    <?php
                    $languages = [
                        [
                            'code' => 'fr',
                            'link' => './fr?force_locale=true',
                        ],
                        [
                            'code' => 'nl',
                            'link' => './nl?force_locale=true',
                        ],
                        [
                            'code' => 'en',
                            'link' => './?force_locale=true',
                        ],
                    ];
                    ?>

                    <ul class="navbar-nav ml-auto">
                        <li data-aos="zoom-in" data-aos-delay="800">
                            <div class="fb-share-button" data-href="https://www.facebook.com/covidsolidarity"
                                 data-layout="button_count" data-size="large">
                                <a target="_blank"
                                   href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fcovidsolidarity&amp;src=sdkpreparse"
                                   class="fb-xfbml-parse-ignore"><?= __('Share') ?></a>
                            </div>
                        </li>
                        <?php foreach ($languages as $key => $lang): ?>
                            <li class="nav-item <?= I18N::getCurrentLang() === $lang['code'] ? 'active' : '' ?>" data-aos="fade-left" data-aos-delay="<?= ($key + 1) * 150 ?>">
                                <a class="nav-link" href="<?= $lang['link'] ?>"><?= strtoupper($lang['code']) ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="app-body">
            <!-- BLOCK1 -->
            <section class="bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col" data-aos="fade-right" data-aos-delay="400">
                            <h1><?= __('Would you like to give your neighbour a helping hand?') ?></h1>
                            <p>
                                <?= __('Join us in the movement and propose to help your neighbours by grocery shopping for their basic needs') ?>
                            </p>
                            <a class="btn btn-success btn-mobile-block" href="#help">
                                <?= __('I want to help') ?>
                            </a>
                            <a class="btn btn-help btn-mobile-block" href="#need-help">
                                <?= __('Need help? Click here') ?>
                            </a>
                        </div>
                        <div class="col d-none d-lg-block" data-aos="fade-left" data-aos-delay="600">
                            <img src="./assets/img/header-pic.png" alt="applicant opening the door">
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK1 -->

            <!-- BLOCK2 -->
            <section class="bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('Let’s spread solidarity, not the virus') ?></h2>
                            <p>
                                <?= __('In order to slow down the circulation of the virus, the government and the medical staff strongly recommend the population to stay home isolated. How can we access basic needs and feed ourselves if we’re stuck at home in isolation?') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK2 -->

            <!-- BLOCK3 -->
            <section class="bg-white" id="need-help">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('How does it work?') ?></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="400">
                            <img class="rounded" src="./assets/img/applicant.png" alt="applicant">
                            <h3 class="title-quote"><?= __('“I would like to get help”') ?></h3>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-center"><img src="./assets/img/ico_print.svg" height="100px"></p>
                            <p><?= __('Print out your shopping list and ask your neighbour to do the shopping for you.') ?></p>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                            <p class="text-center"><img src="./assets/img/ico_door.svg" height="100px"></p>
                            <p><?= __('Stick it to your door or put it in the hallway.') ?></p>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="900">
                            <p class="text-center"><img src="./assets/img/ico_thanks.svg" height="100px"></p>
                            <p>
                                <?= __('Wait for a helping neighbour to fetch the list. (S)He will contact you and deliver to you as soon as possible.') ?>
                            </p>
                        </div>
                    </div>

                    <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                        <a onclick="gtag()" class="btn btn-success btn-mobile-block" href="./files/EN.pdf" target="_blank">
                            <?= __('Print out your shopping list') ?>
                        </a>
                        <a class="btn btn-help btn-mobile-block"
                           href="https://docs.google.com/forms/d/e/1FAIpQLSftvX-pPQZePG8K46Npk8pBvUUP5Da7MP8CXPbtL-wAz0spcw/viewform"
                           target="_blank"><?= __('Find someone to help me') ?></a>
                    </div>

                    <div class="section-spacer"></div>

                    <div class="row" id="help">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                            <img class="rounded" src="./assets/img/hero.png" alt="hero">
                            <h3 class="title-quote"><?= __('“I can help ”') ?></h3>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="500">
                            <?php
                            $instructions = [
                                __('<a class="text-underline" href="https://docs.google.com/forms/d/e/1FAIpQLSftvX-pPQZePG8K46Npk8pBvUUP5Da7MP8CXPbtL-wAz0spcw/viewform" target="_blank"><u><b>Fill out this form</b></u></a> 📝'),
                                __('<a class="text-underline" href="./files/EN.pdf" target="_blank"><u><b>Print out the template</b></u></a> “shopping list” in A4 format 🖨️'),
                                __('Share it or place it in your neighbour’s mailbox 📬'),
                                __('Go back home and enjoy a coffee ☕'),
                                __('Take your neighbour’s filled in shopping list and tell him/her you’ll go shop for him 🚶'),
                                __('Go to the store, try not to empty the shelves if you have what you need, be mindful to others. 📝'),
                                __('Preferably use a shopping cart instead of a shopping basket, you create additional distance. 🛒'),
                                __('Come alone. 🚶‍♂️'),
                                __('Only touch products you are gonna buy. 🤚'),
                                __('Pay electronically. 💳'),
                                __('Go back to your neighbour’s home, put the groceries down in front of the door, and ring! 🎒'),
                                __('<b>Mission accomplished, thank you very much for your help!</b> 🚀 💚'),
                                __('Now you can also share a picture on Facebook or Instagram with #covidsolidarity 📸'),
                            ];
                            ?>
                            <ol class="list-instructions">
                                <?php foreach ($instructions as $key => $instruction): ?>
                                    <li <?= $key == count($instructions) -1 ? 'class="list-item-instagram"': '' ?>>
                                        <?= $instruction ?>
                                    </li>
                                <?php endforeach; ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK3 -->

            <!-- BLOCK4 -- >
            <section class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2>Instagram feed</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="row">
                                <div class="col-3">
                                    <img src="..." alt="...">
                                </div>
                                <div class="col-3">
                                    <img src="..." alt="...">
                                </div>
                                <div class="col-3">
                                    <img src="..." alt="...">
                                </div>
                                <div class="col-3">
                                    <img src="..." alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <p>#AideTonVoisin #HelpJouwBuren</p>

                            <ul class="list-inline">
                                <li>
                                    <a href="" target="_blank">Rejoignez-nous sur Facebook</a>
                                </li>
                                <li>
                                    <a href="" target="_blank">Rejoignez-nous sur Instagram</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <! -- ENDBLOCK4 -->

            <!-- BLOCK5 -->
            <section class="bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('Rules to respect') ?></h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="400">
                            <?php
                            $rules = [
                                __('Wear gloves when you go shopping (when you take the groceries and put them in the bags). Touch only the products you buy.'),
                                __('Use a shopping cart instead of a shopping bag, you create thus additional distance.'),
                                __('Preferably come alone.'),
                                __('Keep a distance of 3 meters between the receiver and the volunteer. By all means, avoid physical contact, practice social distancing with vulnerable people. Avoid social contact as much as possible.'),
                                __('Wash your hands regularly or use a hand disinfectant after the delivery (this is for both the receiver and the volunteer of the delivery)'),
                                __('Avoid touching door handles and other metallic objects during the delivery. When contacting between the receiver and the volunteer, communicate by phone or through a message application (WhatsApp or Messenger for example).'),
                                __('Pay electronically.'),
                                __('Cover your mouth and nose with a tissue when you cough or sneeze or use the inside of your elbow.'),
                                __('Be careful with vulnerable groups i.e. Senior-aged individuals +65, diabetics, people suffering from heart diseases, pulmonary insufficiency, renal failure, and immunosuppressed patients and many others.'),
                                __('If a volunteer is not delivering we recommend you stay home safe and avoid social contact.'),
                            ];
                            ?>
                            <ol>
                                <?php foreach ($rules as $rule): ?>
                                    <li>
                                        <?= $rule ?>
                                    </li>
                                <?php endforeach; ?>
                            </ol>

                            <p>
                                <?= __('For more information visit our page: <a href="https://www.info-coronavirus.be/" target="_blank">https://www.info-coronavirus.be/</a>') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK5 -->

            <!-- BLOCK6 -->
            <section class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('Do you have any questions ? We’ve got the answers !') ?></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                            <img class="rounded" src="./assets/img/hero.png" alt="hero">
                            <h3 class="title-quote"><?= __('“I would like to help”') ?></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <?php
                            $questionsHelp = [
                                [
                                    'title' => __('Will I get paid to help my neighbour?'),
                                    'content' => __('No, we are acting strictly on a voluntary basis. But of course your neighbour is free to decide how (s)he would like to thank you.'),
                                ],
                                [
                                    'title' => __('I don’t want to pay the money upfront'),
                                    'content' => __('This is a condition you need to fill in order to help your neighbour. Not to make it too expensive, we advise you to only provide for basic needs.'),
                                ],
                                [
                                    'title' => __('How to hand over groceries to someone inside a building?'),
                                    'content' => __('You just have to make contact with the person you want to do the shopping for, and tell him at what time you will put the groceries in front of his door. Don’t forget rules for proper hygiene.'),
                                ],
                                [
                                    'title' => __('How will I get refunded?'),
                                    'content' => __('It’s very simple ! The only thing you have to do is to write down your bank account number on the shopping list that you will give back to your neighbour. Your neighbour will pay you back as soon as possible.'),
                                ],
                            ];
                            ?>

                            <div class="card-deck">
                                <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsHelp[0]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsHelp[0]['content'] ?></p>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                                <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsHelp[1]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsHelp[1]['content'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-deck">
                                <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsHelp[2]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsHelp[2]['content'] ?></p>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                                <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsHelp[3]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsHelp[3]['content'] ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="section-spacer"></div>

                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                            <img class="rounded" src="./assets/img/applicant.png" alt="applicant">
                            <h3 class="title-quote"><?= __('“I would like to get help”') ?></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <?php
                            $questionsNeedHelp = [
                                [
                                    'title' => __('Can I contact the person who helped me again in the future?'),
                                    'content' => __('Of course ! The goal is that the two of you can meet in order to create a relationship of trust. Nevertheless, do not forget the rules of hygiene in order to stay safe.'),
                                ],
                                [
                                    'title' => __('How to know who is shopping for me?'),
                                    'content' => __('When your helper takes your shopping list, he will contact you on your phone number to inform you that (s)he is on her/his way.'),
                                ],
                                [
                                    'title' => __('I am not able to easily send money'),
                                    'content' => __('You can ask a friend or a family member to help you pay back the person who did the shopping for you or download a payment application on your mobile phone. The best is to ask for help.'),
                                ],
                                [
                                    'title' => __('What is the maximum amount that I can order for?'),
                                    'content' => __('You can order for as much as you’d like, but we advise not to go over 25 to 30 euros and focus on your basic needs. Also mind the weight of the shopping bag, the person who will deliver it to you will have to carry it.'),
                                ],
                            ];
                            ?>

                            <div class="card-deck">
                                <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsNeedHelp[0]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsNeedHelp[0]['content'] ?></p>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                                <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsNeedHelp[1]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsNeedHelp[1]['content'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-deck">
                                <div class="card card-question" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsNeedHelp[2]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsNeedHelp[2]['content'] ?></p>
                                    </div>
                                </div>

                                <div class="w-100 d-none d-sm-block d-md-block d-lg-none mb-4"></div>

                                <div class="card card-question" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $questionsNeedHelp[3]['title'] ?></h4>
                                        <p class="card-text"><?= $questionsNeedHelp[3]['content'] ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK6 -->

            <!-- BLOCK7 -->
            <section class="bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('With the help of') ?></h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                            <?php
                            $partners = [
                                [
                                    'name' => 'Carrefour',
                                    'thumb' => './assets/img/partners/partner_carrefour.png',
                                ],
                                [
                                    'name' => 'Delhaize',
                                    'thumb' => './assets/img/partners/partner_delhaize.png',
                                ],
                                [
                                    'name' => 'Mestdagh',
                                    'thumb' => './assets/img/partners/partner_mestdagh.png',
                                ],
                                [
                                    'name' => 'Medi Market',
                                    'thumb' => './assets/img/partners/partner_mm.png',
                                ],
                                [
                                    'name' => 'Deli Traiteur',
                                    'thumb' => './assets/img/partners/partner_deli.png',
                                ],
                            ];
                            ?>
                            <ul class="list-inline">
                                <?php foreach ($partners as $partner): ?>
                                    <li class="list-inline-item">
                                        <img src="<?= $partner['thumb'] ?>" alt="<?= $partner['name'] ?>" title="<?= $partner['name'] ?>">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK7 -->

            <!-- BLOCK8 -->
            <section class="bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                            <h2><?= __('A 100% voluntary initiative') ?></h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                            <p>
                                <?= __('We were touched by the way the Covid-19 crisis turned out to affect our community. This epidemic forced us to find pragmatic solutions to bring help to those in need. We decided to serve the population through collective intelligence.') ?>
                            </p>

                            <p>
                                <?= __('A non-profit citizen movement created online by a group of entrepreneurs and students from the BeTech Community who wanted to create a positive social impact .') ?>
                            </p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="400">
                            <?php
                            $team = [
                                [
                                    'thumb' => './assets/img/team/mate_1.png',
                                    'name' => 'Olivier R. Rousseaux',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_2.png',
                                    'name' => 'Michel Pierret',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_3.png',
                                    'name' => 'Adrien Duchateau',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_4.png',
                                    'name' => 'Maxim Berge',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_5.png',
                                    'name' => 'Carolina Tirado',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_6.png',
                                    'name' => 'Stijn Verlinden',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_7.png',
                                    'name' => 'Léon Lamotte',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_8.png',
                                    'name' => 'Georges-Alexandre Hanin',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_9.png',
                                    'name' => 'Louis-Philippe Loncke',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_10.png',
                                    'name' => 'Daniel Sum',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_11.png',
                                    'name' => 'Quentin Petit',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_12.png',
                                    'name' => 'Melvyn Hills',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_13.png',
                                    'name' => 'Gaylord roukine',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_14.png',
                                    'name' => 'Louis Driegelinck',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_15.png',
                                    'name' => 'Jonathan Schockaert',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_16.png',
                                    'name' => 'Stéphan Zych',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_17.png',
                                    'name' => 'Edouard Jadot',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_18.png',
                                    'name' => 'Ines Bensusan',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_19.png',
                                    'name' => 'Nicolas Frenay',
                                ],
                                [
                                    'thumb' => './assets/img/team/mate_20.png',
                                    'name' => 'Jose Zurstrassen',
                                ],
                            ];
                            ?>
                            <ul class="list-team">
                                <?php foreach ($team as $key => $mate) : ?>
                                    <li class="list-inline-item" data-aos="fade-up" data-aos-delay="<?= ($key + 1) * 100 ?>">
                                        <img class="rounded" src="<?= $mate['thumb'] ?>" alt="<?= $mate['name'] ?>" title="<?= $mate['name'] ?>">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ENDBLOCK8 -->
        </div>

        <footer class="app-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
            <div class="container">
                <div class="row">
                    <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            <?= __('❤️ Made with love to beat Covid-19') ?>
                        </p>

                        <p>
                            <?= __('Contact') ?> - <a href="mailto:info@covid-solidarity.org">info@covid-solidarity.org</a> <br>
                            <a class="link-facebook" href="https://www.facebook.com/covidsolidarity/" target="_blank"><?= __('Join the movement on Facebook') ?></a> - <a class="link-facebook" class="link-facebook" href="https://www.instagram.com/covid19.solidarity/">Instagram</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="./assets/js/app.js"></script>
</body>
