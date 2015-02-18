
<div class="wrapper">

    <!--Logo and Main Menu Start-->
    <header class="header-section">

        <!--Logo Start-->
        <div class="logo">
            <div class="logo-wrapper">
                <a href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
        </div>
        <!--End-->

        <!--Navigation Menu Start-->
        <ul class="flexy-menu vertical">
            <li class="<?php echo ($active=="index")?'active':'';?>" style="display: block;"><a href="index.php">Home</a><div class="menu-space"></div>
                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="about")?'active':'';?>" style="display: block;"><a href="about-us.php">About Us</a><div class="menu-space"></div>

                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="services")?'active':'';?>" style="display: block;"><a href="services.php">Our Services</a><div class="menu-space"></div>

                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="portfolio")?'active':'';?>" style="display: block;"><a href="portfolio.php">Portfolio</a><div class="menu-space"></div>

                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="blog")?'active':'';?>" style="display: block;"><a href="#">Blog</a><div class="menu-space"></div>

                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="default")?'active':'';?>" style="display: block;"><a href="default_page.php">Page</a><div class="menu-space"></div>

                <span class="indicator">+</span></li>
            <li class="<?php echo ($active=="clients")?'active':'';?>" style="display: block;"><a href="clients.php">Clients</a><div class="menu-space"></div></li>
            <li class="<?php echo ($active=="contact")?'active':'';?>" style="display: block;"><a href="contact-us.php">Contact Us</a><div class="menu-space"></div></li>
        </ul>
        <!--Navigation Menu End-->

    </header>
