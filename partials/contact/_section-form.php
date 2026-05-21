<!-- start information section -->
<section class="bg-white z-index-minus1 sm-padding-30px-top sm-no-padding-bottom">
    <div class="container">
        <div class="row sm-padding-five-lr">
            <div class="col-12 col-lg-6 text-center sm-text-left padding-five-right wow fadeIn">
                <h5 class="alt-font text-extra-dark-gray font-weight-600"> Send us an email </h5>
            </div>

            <div class="col-12 col-lg-6 md-margin-50px-bottom sm-no-margin-bottom wow fadeIn">
                <div class="padding-nine-left sm-no-padding-left">
                    <h6 class="alt-font text-extra-dark-gray font-weight-600"> Write to us </h6>

                    <p class="width-90"> We receive a large number of emails every day and may not always be able to
                        respond as quickly as we would like. Please reference our Frequently Asked Questions for general
                        information. </p>

                    <p> Please use the form below to write to us or email us at <a class="text-light-theme"
                            href="mailto:info@slokawaldorf.org"> info@slokawaldorf.org. </a> <br /> For
                        transport-related queries, write to <a class="text-light-theme"
                            href="mailto:transport@slokawaldorf.org"> transport@slokawaldorf.org. </a> </p>

                    <div>
                        <form id="contact-form-32"
                            action="https://slokawaldorf.in/wp-content/themes/sloka/google-sheet/sheets-contact-us.php"
                            method="post" onsubmit="return validateMyForm();">
                            <div class="row">


                                <div class="col-12">
                                    <p class="margin-5px-bottom"> Name* </p>
                                    <input type="text" name="name" id="name" placeholder="Enter student’s full name…"
                                        class="big-input borderRoundCorner" pattern="^[a-zA-Z_ ]{3,85}" required
                                        title="Please Enter Valid Name">
                                </div>
                                <div class="col-12">
                                    <p class="margin-5px-bottom"> Phone number* </p>

                                    <input type="text" name="mobilenumber" id="mobilenumber"
                                        placeholder="Enter phone number" class="big-input borderRoundCorner"
                                        pattern="[0-9]{8,16}" title="Please Enter Valid Phone Number" required>

                                </div>
                                <div class="col-12">
                                    <p class="margin-5px-bottom"> Email* </p>
                                    <input type="text" name="email" id="email" placeholder="Enter your email address"
                                        class="big-input borderRoundCorner"
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                        title="Please Provide a Valid Email Adress" required>
                                </div>

                                <div class="col-12">
                                    <p class="margin-5px-bottom"> Message* </p>
                                    <textarea type="textarea" rows="3" name="message" id="message" placeholder="Message"
                                        class="big-input borderRoundCorner2" required></textarea>
                                </div>


                                <div class="col-12 col-lg-12 padding-10px-bottom">
                                    <p class="margin-15px-bottom alt-font"> Declaration </p>
                                    <div class="RadioInline2">
                                        <label class="containerRadioN"> I agree to the terms & conditions and consent to
                                            give the above personal information to the school.
                                            <input type="radio" name="agree" id="agree" title="Please Select Option"
                                                required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button id="contact-form-32" type="submit" name='submit' value="Submit"
                                        class="btn btn-theme btn-large margin-20px-top border-radius-10"> Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end information section -->