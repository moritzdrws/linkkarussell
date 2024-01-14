<?php
$LINKS = array(

    new Link(
        'https://moritz-drewes.de',
        LinkType::NORMAL,
        'MEINE SEITE',
        '<i class="fa-regular fa-globe-pointer"></i>'
    ),
    new Link(
        'https://paypal.me/moritzdrws',
        LinkType::NORMAL,
        'KLEINE SPENDE',
        '<i class="fa-regular fa-globe-pointer"></i>'
    ),
);


$SOCIAL_LINKS = array(

    new SocialLink(
        'https://www.instagram.com/moritzdrws/',
        LinkType::INSTAGRAM
    ),
    new SocialLink(
        'https://www.x.com/m0xitz/',
        LinkType::X
    ),
    new SocialLink(
        'https://www.linkedin.com/in/moritz-drewes-50781228a/',
        LinkType::LINKEDIN
    ),
    new SocialLink(
        'mailto:hi@moritz-drewes.de',
        LinkType::EMAIL
    ),
);