<div class="cavani_tm_section animated" id="contact">
    <div class="section_inner">
        <div class="cavani_tm_contact">
            <div class="cavani_tm_title">
                <span>Get in Touch</span>
            </div>
            <div class="short_info">
                <ul>
                    <li>
                        <div class="list_inner">
                            <img class="svg" src="{{asset('img/svg/location.svg')}}" alt="" />
                            <span>Ave Street, New York, USA</span>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img class="svg" src="{{asset('img/svg/mail.svg')}}" alt="" />
                            <span><a href="#">hello@cavani.com</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="list_inner">
                            <img class="svg" src="{{asset('img/svg/call.svg')}}" alt="" />
                            <span>+77 022 444 05 05</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form">
                <div class="left">
                    <div class="fields">
                        <form action="/" method="post" class="contact_form" id="contact_form">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li>
                                        <input id="name" type="text" placeholder="Name" autocomplete="off">
                                    </li>
                                    <li>
                                        <input id="email" type="text" placeholder="Email" autocomplete="off">
                                    </li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="cavani_tm_button">
                                <a id="send_message" href="#">Send Message</a>
                            </div>

                            <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="map_wrap">
{{--                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="355" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:355px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:100%;}</style></div></div>--}}

                        <!-- Get your API here https://www.embedgooglemap.net -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
