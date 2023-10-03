<!DOCTYPE html>
<html lang="en">

<?php include "layouts/header.php" ?>

<body>
    <?php include "layouts/navbar.php" ?>
        <div class="container-fluid p-5 bg-light mt-4">

        <div class="container">

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb d-flex justify-content-between">
                    <li class="breadcrumb-item h1 fw-normal">Contact Us</li>
                    <li class="breadcrumb-item mt-3">Home / <span class="text-danger">Contact Us</span></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-fluid text-center mt-5 pt-5">
        <h1 class="display-3" style="font-family: serif;">Keep In Touch With Us</h1>
        <p class="text-muted">Auteur is a Monthly book review publication distributed to 400,000 avid reader through
            subscribing book store <br>
            and
            public libraries, founded in 1988 and located in nashville, Tennessee, BookPage serves as a broad-based <br>
            selection guide to the best new books published every month.
        </p>
    </div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-sm-4 d-flex">
                <i class="bi bi-geo-alt h2"></i>
                <div class="mx-2">

                    <h3>ADDRESS</h3>
                    <p class="text-muted">
                        1800 Abbot Kinney Blvd. Unit D & E <br> Venice</p>
                </div>
            </div>
            <div class="col-sm-4 d-flex">
                <i class="bi bi-geo-alt h2"></i>
                <div class="mx-2">

                    <h3>CONTACT</h3>
                    <p class="m-auto">Mobile: (+88) – 1990 – 6886</p>
                    <P class="m-auto">Hotline: 1800 – 1102</P>
                    <P class="m-auto">Mail: contact@auteur.com</P>
                </div>
            </div>

            <div class="col-sm-4 d-flex">
                <i class="bi bi-geo-alt h2"></i>
                <div class="mx-2">

                    <h3>HOUR OF OPERATION</h3>
                    <p class="m-auto">Monday – Friday: 09:00 – 20:00</p>
                    <P>Sunday & Saturday: 10:30 – 22:00</P>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <iframe class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924234.6302710465!2d66.59495074892502!3d25.19338946981612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1671616886864!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container-fluid text-center">
        <h1 class="mb-4">Send A Message</h1>
        <input style="outline: none;" class="w-25 p-2 mb-3 bg-light border border-4" type="text" placeholder="Name">
        <input style="outline: none;" class="w-25 p-2 bg-light border border-4" type="email" placeholder="Email">
        <div>
            <textarea style="outline: none;" class="w-50 border bg-light border-4 p-2" placeholder="Message" cols="20" rows="5"></textarea>
        </div>
    </div>
    <div class="text-center mt-5">
        <button class="bg-danger px-5 py-3 border-0 text-white  h6">SUBMIT >></button>
    </div>

    <?php include "layouts/footer.php" ?>
</body>

</html>