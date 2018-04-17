<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Wellspace Utah</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/main.css' ?>"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/theme.css' ?>"/>
</head>
<body>
<header>

    <?php
$items = [];
if (has_nav_menu('primary')) {
$items = wp_get_nav_menu_items('primary', [
'menu_class' => 'primary-menu',
]);
}
?>
<?php if (is_array($items)) : ?>
<nav id="site-navigation" class="nav-primary">
<?php foreach ($items as $item) : ?>
    <?php if ($item->title == 'Privacy') continue; ?>
<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
<?php endforeach; ?>
</nav>
<?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col page-title">
                <div id="logo"></div>
                <h1>Wellspace</h1>
                <h2>Comprehensive DBT & Therapy</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="contact">
                    <a href="tel:1234567890">1234567890</a>
                    <a href="mailto:testy@mcgee.com">testy@mcgee.com</a>
                </nav>
                <nav class="social">
                    <a href="http://facebook.com" class="fa fa-facebook"></a>
                    <a href="http://twitter.com" class="fa fa-twitter"></a>
                    <a href="http://pinterest.com" class="fa fa-pinterest"></a>
                </nav>

            </div>
        </div>
    </div>
    <div class="hero">

    </div>

    <div class="cta">
       <span>Get In Touch</span>
       <button class="btn btn-primary">Contact</button>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-8 content">


Lorem ipsum dolor amet mumblecore vape gentrify vaporware hot chicken. Kitsch YOLO jean shorts, narwhal snackwave organic master cleanse iPhone disrupt farm-to-table 90's messenger bag next level food truck bespoke. Cardigan pickled vape franzen health goth. Wolf pinterest master cleanse put a bird on it tumblr yuccie semiotics taiyaki messenger bag. Polaroid celiac cronut sartorial vape, typewriter messenger bag forage butcher yuccie enamel pin hammock flexitarian tumeric. Mlkshk copper mug locavore banh mi keytar. Pickled meggings aesthetic put a bird on it tacos.
Marfa fanny pack brunch vice succulents crucifix. Vice asymmetrical affogato, echo park four dollar toast brooklyn 3 wolf moon bicycle rights etsy af. Retro +1 iceland, chia crucifix selvage flexitarian put a bird on it dreamcatcher wayfarers lo-fi tote bag. Subway tile cloud bread bicycle rights authentic 3 wolf moon shoreditch +1 green juice freegan paleo sustainable chicharrones.
Slow-carb raw denim vaporware sustainable try-hard leggings. Scenester health goth next level, chia man bun farm-to-table wayfarers locavore messenger bag. Try-hard chia hashtag hammock ethical. Organic cornhole ugh stumptown synth offal adaptogen biodiesel migas vice health goth kinfolk quinoa kale chips flexitarian. Selfies la croix street art, tbh readymade paleo etsy. Skateboard slow-carb bicycle rights kombucha dreamcatcher etsy bitters wolf. Street art meggings kickstarter enamel pin, cray pabst marfa man braid gastropub meh tote bag venmo.
Pop-up normcore adaptogen, locavore flannel cred raclette yuccie. Chicharrones pabst sustainable, gastropub messenger bag kickstarter kinfolk disrupt lumbersexual stumptown. Viral slow-carb whatever raclette marfa. Banh mi meggings microdosing, beard raw denim iceland edison bulb chillwave tilde enamel pin air plant 90's try-hard jianbing. Tilde swag asymmetrical humblebrag, poutine poke church-key offal sriracha cred brunch biodiesel tote bag salvia gluten-free.
Godard actually fam tousled, forage letterpress flannel shabby chic narwhal asymmetrical knausgaard viral. Copper mug cray portland intelligentsia tumeric. Hammock hot chicken typewriter man braid pop-up street art slow-carb gochujang listicle pork belly. Jianbing mumblecore actually mlkshk tumblr meggings brooklyn yuccie cray health goth. Poke pinterest lomo, trust fund sriracha +1 lo-fi williamsburg normcore. Sartorial gochujang retro, hell of butcher cloud bread offal taiyaki narwhal.
Oh. You need a little dummy text for your mockup? How quaint.
I bet you’re still using Bootstrap too…


        </div>
        <div class="col-sm-4 sidebar">
            <div class="profile">
                <h2>Testy McGee, PHD</h2>
                <h3>Wellspace Utah</h3>
                <div class="photo"></div>
                <address>
                    Wellspace Utah<br/>
                    123 Test st.<br/>
                    Salt Lake City, UT 84115
                </address>
                <nav class="contact">
                    <a href="tel:1234567890">1234567890</a>
                    <a href="mailto:testy@mcgee.com">testy@mcgee.com</a>
                </nav>
                <div class="psychology-today"></div>
            </div>
            <h2>Contact Us</h2>
        <form class="contact" action="contact.php" method="post">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" required/>
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" required/>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" required/>
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
            <input type="submit" value="Send"/>
        </form>
        </div>
    </div>
</div>
<footer>
<nav class="container">
<a href="<?php echo get_permalink(get_page_by_title('privacy')); ?>">Privacy Policy</a>
</nav>
</footer>

</body>
</html>
