<!-- start information section -->
<section id="Teacher_Training_Apply"
    class="bg-white z-index-minus1 no-padding-top sm-padding-30px-top sm-no-padding-bottom">
    <div class="container">
        <div class="row sm-padding-five-lr">
            <div class="col-12 col-lg-6 text-center sm-text-left padding-five-right wow fadeIn">
                <h5 class="alt-font text-extra-dark-gray font-weight-600"> Apply Now </h5>
            </div>

            <div class="col-12 col-lg-6 wow fadeIn">
                <div class="padding-nine-left sm-no-padding-left">
                    <div
                        class="padding-ten-all sm-padding-five-all bg-purpleM border-radius-10 admissionNew box-shadow-sloka">
                        <form id="contact-form-31tt"
                            action="https://slokawaldorf.in/wp-content/themes/sloka/google-sheet/sheets-teacher-taining.php"
                            method="post" onsubmit="return validateMyForm();">

                            <div>
                                <div id="success-contact-form" class="mx-0"></div>
                                <p class="margin-5px-bottom text-white"> Name* </p>
                                <input type="text" name="name" id="name" placeholder="Name*"
                                    class="border-radius-4 bg-white medium-input" pattern="^[a-zA-Z_ ]{3,85}" required
                                    title="Please Enter Valid Name">

                                <p class="margin-5px-bottom text-white"> Email* </p>

                                <input type="text" name="email" id="email" placeholder="E-mail address*"
                                    class="border-radius-4 bg-white medium-input"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                    title="Please Provide a Valid Email Adress" required>

                                <p class="margin-5px-bottom text-white"> Mobile Number* </p>
                                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number"
                                    class="border-radius-4 bg-white medium-input" pattern="[0-9]{8,16}"
                                    title="Please Enter Valid Phone Number" required>

                                <p class="margin-5px-bottom text-white"> Which programme are you interested in?* </p>
                                <select name="interested" id="interested" class="border-radius-4 bg-white medium-input"
                                    required="">
                                    <option value=""> Which programme are you interested in? </option>

                                    <option value="Sloka Steiner Teacher Education Programme"> Sloka Steiner Teacher Education Programme
                                    </option>
                                    <option value="Sponsored Teacher Training for Tribal schools"> Sponsored Teacher
                                        Training for Tribal schools </option>
                                    <option value="Sponsored Teacher Training for Government schools"> Sponsored Teacher
                                        Training for Government schools </option>
                                </select>

                                <div class="RadioInline2">
                                    <label class="containerRadioN text-white text-shmall"> I agree to be contacted by
                                        the school’s representative.
                                        <input type="radio" name="agree" id="agree" title="Please Select Option"
                                            required>
                                        <span class="checkmark"></span>
                                    </label>

                                </div>

                                <button id="contact-form-31tt" type="submit" name='submit' value="Submit"
                                    class="btn btn-large border-radius-4 btn-white"> Submit </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- end information section -->