<?php require __DIR__ . '/.header.php'; ?>
<!--SECTION SECONDARY BANNER START-->
<section class="secondary_banner_wrapper">
    <div class="container">
        <h2><span>Local</span> stores</h2>
        <h3>Find a store near you</h3>
    </div>
</section>
<!--SECTION SECONDARY BANNER END-->

<!--SECTION LOCAL STORIES START-->
<section class="local_stories_wrapper">
    <div class="container">
        <div class="local_stories">
            <div class="local_stories_item">
                <h4>London</h4>
                <h6>180-182 Regent Street, London, W1B 5BT</h6>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing esi elit.
                    Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec
                    tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis.
                    Aliquam erat volutpat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing esi elit.
                    Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec
                    tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis.
                    Aliquam erat volutpat.
                </p>
                <button class="btn">view details</button>
            </div>
            <div class="local_stories_item">
                <h4>New York</h4>
                <h6>109 Columbus Circle, New York, NY 10023</h6>
                <p>
                    Nunc non posuere nisl. Etiam finibus vel dui nec lobortis.
                    Aliquam egestas, sem quis condimentum venenatis, erat leo
                    fermentum dolor, non sollicitudin massa mi eu nibh. Nullam
                    vitae aliquam dui, non sodales nisl.
                </p>
                <button class="btn">view details</button>
            </div>
            <div class="local_stories_item">
                <h4>Paris</h4>
                <h6>2133 Rue Saint-Honoré, 75001 Paris</h6>
                <p>
                    Ut interdum fermentum blandit. Donec nec
                    lacus egetit mi rhoncus eleifend. Curabitur laoreet
                    nisl eget rutruml auctor. Vestibulum ante ipsum primis
                    in faucibus orcip luctus et ultrices posuere cubilia curae
                    cras ligula.
                </p>
                <button class="btn">view details</button>
            </div>
        </div>
    </div>
</section>
<!--SECTION LOCAL STORIES END-->

<!--SECTION LOCAL STORIES MAP START-->
<section class="local_stories_map_wrapper">
    <div id="map" class="map"></div>
    <div class="local_stories_map_content">
        <h4>London</h4>
        <h6>180-182 Regent Street, London, W1B 5BT</h6>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            esi elit. Vivamus at arcu sem. Vestibulum ornare
            eleifendit massa, nec tempor odio. Fusce posuere
            nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.
        </p>

        <div class="contact_info">
            <p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                180-182 Regent Street, London, W1B 5BT
            </p>
            <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                Telephone: <a href="tel:0123456789">0123-456-789</a>
            </p>
            <p>
                <i class="fa fa-link" aria-hidden="true"></i>
                <a href="#">www.yourwebsite.com</a>
            </p>
            <p>
                <i class="fa fa-envelope" aria-hidden="true"></i>
                Email: <a href="mailto:support@yourwebsite.com" class="active-mail">support@yourwebsite.com</a>
            </p>
            <p>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                Monday-Friday: 9am to 6pm Saturday: 10am to 6pm Sunday: 10am to 2pm
            </p>
        </div>
        <div class="social_media">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        </div>
    </div>
</section>
<!--SECTION LOCAL STORIES MAP END-->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBihtmxNKNXSP1x9FFIybuWuTGNzaeoDDM&callback=initMap&libraries=&v=weekly"
        defer
></script>
<?php require __DIR__ . '/.footer.php'; ?>
