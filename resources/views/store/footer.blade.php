<footer  class="footer_dark">
    <div  class="footer_top">
        <div  class="container">
            <div  class="row">
                <div  class="col-lg-3 col-md-6 col-sm-12">
                    <div  class="widget">
                        <div  class="footer_logo"><a  href="#">
                                <h2 > ZoomStore </h2>
                            </a></div>
                        <p > Retrouvez tous les accessoires et Telephones portable ici ... </p>
                    </div>
                    <div  class="widget">
                        <ul  class="social_icons social_white">
                            <li ><a  target="_blank"
                                    href="https://facebook.com"><i 
                                        class="ion-social-facebook"></i></a>
                            </li>
                            <li ></li>
                            <li ></li>
                            <li ><a  target="_blank"
                                    href="https://www.youtube.com/channel/UCkqALrIVPEyGnnbmiFl3lQA/?sub_confirmation=1"><i
                                         class="ion-social-youtube-outline"></i></a>
                            </li>
                            <li ><a  target="_blank"
                                    href="https://www.instagram.com/mudey_formation/"><i 
                                        class="ion-social-instagram-outline"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-3 col-sm-6">
                    <div  class="widget">
                        <h6  class="widget_title">A propos</h6>
                        <ul  class="widget_links">
                            <li ><a 
                                    ng-reflect-router-link="/page,a-propos-de-nous-shop"
                                    href="/page/a-propos-de-nous-shop">A Propos de nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link="/page,nos-services-jstore"
                                    href="/page/nos-services-jstore">Nos services</a></li>
                            <li ><a 
                                    ng-reflect-router-link="/page,contactez-nous-category"
                                    href="/page/contactez-nous-category">Contactez-Nous</a></li>
                            <li ><a 
                                    ng-reflect-router-link="/page,nos-partenaires-mudey"
                                    href="/page/nos-partenaires-mudey">Nos partenaires</a></li>
                            <li ><a 
                                    ng-reflect-router-link="/page,mentions-lgales-espero"
                                    href="/page/mentions-lgales-espero">Mentions légales</a></li>
                        </ul>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-3 col-sm-6">
                    <div  class="widget">
                        <h6  class="widget_title">Category</h6>
                        <ul  class="widget_links">
                            <li ><a  href="#">Disponible</a></li>
                            <li ><a  href="#">Featured</a></li>
                            <li ><a  href="#">Iphone</a></li>
                            <li ><a  href="#">Samsung</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div  class="col-lg-2 col-md-6 col-sm-6">
                    <div  class="widget">
                        <h6  class="widget_title">My Account</h6>
                        <ul  class="widget_links">
                            <li ><a  routerlink="account"
                                    ng-reflect-router-link="account" href="/account">My Account</a></li>
                            <li ><a  routerlink="terms"
                                    ng-reflect-router-link="terms" href="/terms">Terms</a></li>
                            <li ><a  routerlink="signin"
                                    ng-reflect-router-link="signin" href="{{ route('login') }}">Connexion</a></li>
                            <li ><a  routerlink="signup"
                                    ng-reflect-router-link="signup" href="{{ route('register') }}">Inscription</a></li>
                        </ul>
                    </div>
                </div>
                <div  class="col-lg-3 col-md-4 col-sm-6">
                    <div  class="widget">
                        <h6  class="widget_title">Contact Info</h6>
                        <ul  class="contact_info contact_info_light">
                            <li ><i 
                                    class="ti-location-pin"></i>
                                <p >Treichville </p>
                            </li>
                            {{-- Pour la redirection vers la boite mail --}}
                            <li ><i  class="ti-email"></i><a
                                     href="mailto:contact@jstore.fr">contact@zoomstore.com</a>
                            </li>
                            <li ><i  class="ti-mobile"></i>
                                <p >+225 01 42 84 76 66</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="bottom_footer border-top-tran">
        <div  class="container">
            <div  class="row">
                <div  class="col-md-6">
                    <p  class="mb-md-0 text-center text-md-start"> © 2023 All Rights
                        Reserved by ZoomStore Telephone </p>
                </div>
                <div  class="col-md-6">
                    <ul 
                        class="footer_payment text-center text-lg-end d-flex gap-2 justify-content-end">
                        <li ><a  href="#"><img
                                     src="assets/images/visa.png" alt="visa"></a></li>
                        <li ><a  href="#"><img
                                     src="assets/images/discover.png" alt="discover"></a>
                        </li>
                        <li ><a  href="#"><img
                                     src="assets/images/master_card.png"
                                    alt="master_card"></a></li>
                        <li ><a  href="#"><img
                                     src="assets/images/paypal.png" alt="paypal"></a></li>
                        <li ><a  href="#"><img
                                     src="assets/images/amarican_express.png"
                                    alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>