<?php
session_start();
    

require_once("tools.php");
top_module("Welcome", "background-image", "button-primary", "", "", "");
?>


<body class="dark-background">

    <!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<body class="dark-background">
    <div class="light-background">
        <div class="container">
            <div class="column text-center">
                <br><h3>Welcome to the Grange</h3>
                <p class="text-center">
                    Sit back and relax while rembracing the beauty of nature in all of it's glory.
                    The Grange is a place where community meets tranquility, whether you want to get in touch with 
                    your adventurous side or if you are just seeking divine relaxation, we've got something for 
                    everyone here. Located along the beachfront in Portalington, the Grange is a 30 minute drive
                    from Geelong and about an hour and 30 minutes away from Melbourne CBD. For those who want to take
                    the scenic route, you can take a ferry straight to Portalington from Docklands and travel in style.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="three columns">
                <img class="image-container" src="../media/caravan.png" alt="Simplified caravan logo">
                <p>
                    Our caravan spaces are surrounded by wildlife, amongst wild drop bears, bats in the night
                    and people in the light. We are sure that you will have a unique adventure with every visit
                    to the Grange.
                </p>
            </div>
            <div class="three columns">
                <img class="image-container" src="../media/tent.png" alt="Simplifiedd tent logo">
                <p>
                    We've got different sites for all sizes of families. With 5 different types of camping sites,
                    you're sure to find the perfect place for your family to stay.
                </p>
            </div>
            <div class="three columns">
                <img class="image-container" src="../media/hiking.png" alt="Logo of man hiking">
                <p>
                    Enjoy 8 different hiking paths, we have challenges for all fitness levels. Hire boots, hiking
                    packs and more from our shop.
                </p>
            </div>
            <div class="three columns">
                <img class="image-container" src="../media/family.png" alt="Logo of family">
                <p>
                    We pride ourselves in ensuring that our grounds are family friendly, we have playgrounds for 
                    the kids, soccer fields, basketball courts, mini golf, archery and various other activities
                    for everyone to enjoy.
                </p>
            </div>
        </div>
    </div>
</body>
    <!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php
require_once("tools.php");
bottom_module();
debug_module();
debug_bot_module();
?>
