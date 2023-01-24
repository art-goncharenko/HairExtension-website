<?php get_header(); ?>
<main class="mainTag">
    <h2>We are located at
        533 3rd Avenue, New York, NY</h2>
    <p class="parking">A convenient parking space is available next to the studio for only $28
        up to 12 hours.<br> Parking location is <a href="https://goo.gl/maps/N2DXhAyUErHnxQWH8"
                                                   target="_blank"
                                                   rel="noopener noreferrer"
        > 221 East 36st, New York, NY</a></p>
    <section class="locationSection">
        <div class="leftSide">
            <div class="googleMaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.7022394335004!2d-73.97938884876694!3d40.74657704333461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ef1db8d787%3A0xa7e8563edbac37e6!2sJM%20Hair%20Extensions!5e0!3m2!1sen!2sus!4v1673586011264!5m2!1sen!2sus"
                        width="350"
                        height="300"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="rightSide">
            <h3>Get in touch</h3>
            <div class="phoneDiv">
                <p>Give us a call to make an appointment</p>
                <a href="tel:(212)814-6088" class="phone">
                    <img src="<?php echo get_template_directory_uri().'./assets/icons/phone.svg'; ?>" alt="phone icon"
                         class="icon">/>
                    (212)814-6088</a>
            </div>
            <div class="mapDiv">
                <p>Click to open in Google Maps</p>
                <a href="https://goo.gl/maps/2oF1hd5kvwmJXkR2A"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="address">
                    <img src="<?php echo get_template_directory_uri().'./assets/icons/map.svg'; ?>" alt="map icon"
                         class="icon">/>
                    533 3rd Avenue, New York, NY</a>
            </div>
            <div class="emailDiv">
                <p>Send us an email</p>
                <a href="mailto:jmbeauty_nyc@icloud.com" class="email">
                    <img src="<?php echo get_template_directory_uri().'./assets/icons/email.svg'; ?>" alt="email icon"
                         class="icon">/>
                    jmbeauty_nyc@icloud.com</a>
            </div>
            <h3 class="follow">Follow us Online!</h3>
            <a href="https://instagram.com/jm_hair_extention?igshid=Zjc2ZTc4Nzk="
               target="_blank"
               rel="noopener noreferrer"
               class="insta">
                <img src="<?php echo get_template_directory_uri().'./assets/icons/insta.svg'; ?>" alt="instagram icon"
                     class="icon">/> Instagram</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>