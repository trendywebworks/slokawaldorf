<!-- start information section -->
<section id="about" class="bg-white z-index-minus1 padding-100px-bottom sm-padding-30px-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 md-margin-50px-bottom wow fadeIn">
                <div class="padding-nine-left sm-padding-15px-lr">
                    <h5 class="alt-font margin-5px-bottom"> Admission enquiry form </h5>
                    <p class="text-small margin-seven-bottom"> Please fill the below form to your best ability and the
                        admissions team will contact you within 2-3 business days or you can also connect with us at <a href="mailto:admission@slokawaldorf.org" target="_blank" rel="noopener">admission@slokawaldorf.org</a> </p>

                    <form id="contact-form-31" action="https://slokawaldorf.in/wp-content/themes/sloka/process.php"
                        method="post">
                        <div class="row">
                            <div class="col-12">
                                <div id="success-project-contact-form" class="mx-0"></div>
                            </div>

                            <div class="col-12">
                                <p class="alt-font margin-15px-bottom text-extra-large"> Which academic year do you seek
                                    admission for? <span class="text-deep-pink">*</span> </p>
                            </div>
                            <div class="col-12 col-lg-12 padding-five-bottom">
                                <div class="Radiocontainer">
                                    <div class="radio-tile-group">
                                        <div class="input-container">
                                            <input id="2025 Intake" class="radio-button" type="radio" name="enquiry_ay"
                                                value="12" required>
                                            <div class="radio-tile">
                                                <label for="2025 Intake" class="radio-tile-label no-margin-bottom"> 2025
                                                    Intake </label>
                                            </div>
                                        </div>

                                        <div class="input-container">
                                            <input id="2026 Intake" class="radio-button" type="radio" name="enquiry_ay"
                                                value="13">
                                            <div class="radio-tile">
                                                <label for="2026 Intake" class="radio-tile-label no-margin-bottom"> 2026
                                                    Intake </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12">
                                <p class="alt-font margin-15px-bottom text-extra-large"> Student’s Information </p>
                            </div>


                            <div class="col-12 col-lg-8">
                                <p class="margin-5px-bottom"> Name <span class="text-deep-pink">*</span> </p>
                                <input type="text" name="student_name" value="" id="name"
                                    placeholder="Enter student’s full name…" class="big-input borderRoundCorner"
                                    pattern="^[a-zA-Z_ ]{3,75}" required title="Please Provide a Valid Name">
                                <div class="error-message"></div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <p class="margin-5px-bottom"> Birthday <span class="text-deep-pink">*</span> </p>
                                <input type='text' name="dob" value="" id="dob" placeholder='dd/mm/yyyy'
                                    class="big-input borderRoundCorner datepicker" title="Birthday"
                                    data-provide="datepicker" required style="margin-top: 0; margin-left: 0;" />

                                <!-- <input  type="text" placeholder="dd/mm/yyyy"  name="birthdate" id="datepicker" class="big-input borderRoundCorner datepicker" pattern="\d{1,2}/\d{1,2}/\d{4}" title="Please Enter Date" required> -->

                                <div class="error-message"></div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <p class="margin-5px-bottom"> Current School </p>
                                <input type="text" name="present_school" title="present school" value=""
                                    id="present_school" placeholder="Enter school’s name…"
                                    class="big-input borderRoundCorner" pattern="[a-zA-Z0-9\s'.,-]+">
                            </div>

                            <div class="col-12 col-lg-12 padding-five-bottom">

                                <div class="RadioInline">
                                    <p class="margin-5px-bottom margin-20px-right"> Does a sibling study at Sloka? <span
                                            class="text-deep-pink">*</span> </p>
                                    <label class="containerRadioN"> Yes
                                        <input type="radio" name="siblings" id="siblingsYes" value="1"
                                            title="Please Select One Option" required>
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="containerRadioN"> No
                                        <input type="radio" name="siblings" id="siblingsNO" value="2">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                                <div class="error-message"></div>
                            </div>

                            <!--<div class="col-12">
                                <p class="alt-font margin-15px-bottom text-extra-large"> Student is eligible for <span
                                        class="text-deep-pink">*</span> </p>
                            </div>-->
                            <div class="col-12 col-lg-12 padding-20px-bottom" style="display:none;">
                                <div class="radioContainer2 alt-font">
                                    <div class="radio-tile-group2">
                                        <div id="studentEligibleFor"></div>
                                    </div>
                                </div>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12 padding-five-bottom">
                                <p class="margin-15px-bottom text-small"> The above is based on the school’s grade wise
                                    cut-off age, for more information on this please speak to the admissions team or
                                    contact us </p>
                            </div>


                            <div class="col-12">
                                <p class="alt-font margin-15px-bottom text-extra-large"> Parent’s information </p>
                            </div>


                            <div class="col-12 col-lg-6">
                                <p class="margin-5px-bottom"> Name <span class="text-deep-pink">*</span> </p>
                                <input type="text" name="father_name" value="" id="father_name"
                                    placeholder="Enter student’s full name…" class="big-input borderRoundCorner"
                                    pattern="^[a-zA-Z_ ]{3,85}" required title="Please Enter Valid Name">
                                <div class="error-message"></div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="margin-5px-bottom"> Phone number <span class="text-deep-pink">*</span> </p>
                                <input type="text" id="mobile" name="mobile" value="" placeholder="Enter phone number"
                                    class="big-input borderRoundCorner" pattern="[0-9]{8,16}"
                                    title="Please Enter Valid Phone Number" required>
                                <div class="error-message"></div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="margin-5px-bottom"> Email <span class="text-deep-pink">*</span> </p>
                                <input type="text" name="email" value="" id="email"
                                    placeholder="Enter your email address" class="big-input borderRoundCorner"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                    title="Please Provide a Valid Email Adress" required>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <p class="margin-5px-bottom"> Current city or town of residence <span
                                        class="text-deep-pink">*</span></p>
                                <input type="text" name="city" id="city" value="" placeholder="Enter city"
                                    class="big-input borderRoundCorner" pattern="[a-zA-Z0-9\s'.,-]+"
                                    title="Please Enter City Name" required>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12 col-lg-12 padding-five-bottom">

                                <div class="RadioInline">
                                    <p class="margin-5px-bottom margin-20px-right"> Are you an Alumni of Sloka? <span
                                            class="text-deep-pink">*</span> </p>
                                    <label class="containerRadioN"> Yes
                                        <input type="radio" id="alumniYes" name="alumni" value="1"
                                            title="Please Select One Option" required>
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="containerRadioN"> No
                                        <input type="radio" id="alumniNo" name="alumni" value="2">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12 col-lg-12 padding-five-bottom">
                                <div class="RadioInline">
                                    <p class="margin-5px-bottom margin-20px-right width-40"> If yes, enter date </p>

                                    <input type="text" name="alumni_date" id="alumni_date" data-provide="datepicker"
                                        placeholder="mm/dd/yyyy" class="OnlyborderBottom datepicker"
                                        title="Please Enter Valid Date">
                                </div>
                                <div class="error-message"></div>
                            </div>


                            <div class="col-12">
                                <p class="alt-font margin-15px-bottom text-extra-large"> Parent’s declaration <span
                                        class="text-deep-pink">*</span> </p>

                            </div>

                            <div class="col-12 col-lg-12 padding-10px-bottom">

                                <div class="RadioInline2">
                                    <label class="containerRadioN"> I have read through the grade wise cut off dates and
                                        eligibility details, and agree to register my child in the respective grade.
                                        <input type="radio" id="declaration1" name="declaration1"
                                            title="Please Select Option" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="error-message"></div>
                            </div>

                            <div class="col-12 col-lg-12 padding-10px-bottom">

                                <div class="RadioInline2">

                                    <label class="containerRadioN"> I agree to the terms & conditions and consent to
                                        give the above personal information to the school.
                                        <input type="radio" id="declaration2" name="declaration2"
                                            title="Please Select Option" required>
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                                <div class="error-message"></div>
                            </div>


                            <div class="col-12">
                                <button id="contact-form-31-button" type="submit" name='submit' value="Submit"
                                    class="btn btn-theme btn-large margin-20px-top border-radius-10"> Submit </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- end information section -->