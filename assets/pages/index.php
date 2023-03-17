<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/book.png" />

    <link href="../vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/pages/home/parallax.css">
    <link rel="stylesheet" href="../styles/pages/home/search.css">
    <link rel="stylesheet" href="../styles/generics/header/header.css">
    <link rel="stylesheet" href="../styles/generics/footer/footer.css">
    <title>InternQuest</title>
</head>

<body>
    
    <?php
        require_once 'components/header.php';
    ?>

    <div class="sample-header">
        <div class="sample-header-section">
            <h1>Search on more than 1 million offers</h1>
            <form onsubmit="event.unefonction();" role="search">
                <input id="search-input" type="search" placeholder="Poste..." autofocus required />
                <button id="search-button" type="submit">Go</button>
            </form>
        </div>
    </div>

    <div class="sample-section-wrap">
        <div class="sample-section">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium
                quis, sem. Nulla consequat massa quis enim. </p>

            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean
                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam
                lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                laoreet. Quisque rutrum. Aenean imperdiet. Etiam
                ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. </p>

            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                tincidunt tempus. Donec vitae sapien ut
                libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. </p>

            <p>Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend
                sapien. Vestibulum purus quam, scelerisque ut,
                mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. </p>

            <p>Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et
                ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis
                arcu tortor, suscipit eget, imperdiet
                nec, imperdiet iaculis, ipsum. </p>

            <p>Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris.
                Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat
                pretium libero. Cras id dui. Aenean ut.</p>

            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium
                quis, sem. Nulla consequat massa quis enim. </p>

            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet
                a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean
                vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam
                lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius
                laoreet. Quisque rutrum. Aenean imperdiet. Etiam
                ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. </p>
        </div>
    </div>

    <?php require_once 'components/footer.php'; ?>

    <script src="../scripts/parallax.js"></script>
</body>

</html>