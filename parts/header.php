<header>
    <link rel="stylesheet" href="css/header.css">
    <a href="index.php">
        <h1 class="siteTitle">Random Movie</h1>
    </a>

    <?php
    if ($_SESSION["page"] === 'random.php'){
        echo "<form id='formother' action='' method='POST'>".
        "<button id='other' type='submit'>".
        "Get another movie".
        "<span class='loading'>".
        "<i class='fa fa-cog fa-spin fa-fw'></i>".
        "<span id='loading'>Loading...</span>".
        "</span>".
        "</button>".
        "</form>";
    }

    else{
        echo "<div id='formother'>".
        "<a href='signIn.php'>".
        "<button id='usrButton' type='submit'>".
        "<div class='usrIcon'>".
        "<i class='fa fa-user' aria-hidden='true'></i>".
        "</div>".
        "Sign up / Sign in".
        "</button>".
        "</a>".
        "</div>";
    }
    ?>

</header>