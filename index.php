<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="language" content="English"/>
    <meta name="description" content=""/>
    <link rel="stylesheet" type="text/css" media="all" href="styles/reset.css" title="default"/>
    <link rel="stylesheet" type="text/css" media="all" href="styles/screen.css" title="default"/>
    <link rel="stylesheet" type="text/css" media="all" href="styles/cyclelite.css" title="default"/>
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/cycle.lite.js"></script>
    <script type="text/javascript">
        $(function () {

            $('#slideshow').cycle({
                prev: '.prev',
                next: '.next',
                timeout: 0
            });

        });
    </script>
    <title>Street Soaps | Home</title>

</head>
<body id="home">

<div id="container">
    <div id="header">
        <h1 id="logo" class="home">
            <a href="index.php" name="top" title="Street Soaps"><img src="images/logo.gif" alt="Street Soaps"/></a>
        </h1> <!--end logo-->
        <ul id="navigation">
            <li class="home"><a href="index.php">Home</a></li>
            <li class="soaps"><a href="soaps.php">Soaps</a></li>
            <li class="contact"><a href="contact.php">Contact</a></li>
        </ul>
    </div><!--#header-->
    <div id="content">
        <div id="image">
            <img src="images/feature.jpg" alt="" width="400" height="560">
        </div><!--#image-->
        <div id="bio">
            <p>For the past several years, Christopher Shores has been walking the streets of New York City, picking up
                detritus of all kinds, including rusty nails, razorblades, spark plugs, discarded electronic equipment
                and shattered auto glass. All of these objects have now found permanent homes inside individual bars of
                clear, pure glycerin soap that the artist calls &ldquo;street soaps.&rdquo; Each unique piece gives a
                sense of time and place, as each box includes information indicating the exact time and location where
                the object within was found. In his travels, Shores has become both an aimless city wanderer and a
                modern urban archaeologist, uncovering clues about how we live by examining the things we leave behind.
                In a small way, he also helps clean the streets of the city, giving a newfound value to the trash he
                collects. The soaps&rsquo; functionality is limited, however. Though they could cleanse your hands, they
                are ultimately dirty&mdash;and even dangerous&mdash;to use. Like bugs frozen in amber, these pieces of
                garbage are records of time and place, and invite us to look at them in a new way.</p>
        </div>
    </div> <!--#content-->
    <div class="push"></div>
</div> <!--end container-->
<div id="footerWrap">
</div> <!--#footerWrap-->
</body>
</html>
