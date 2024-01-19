<footer id="contact" class="contact">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">BlaiseMotors</a>
                        </div>
                        <p>
                            we are dedicated to providing better services to our clients and make all of you comfortable to contributing to our day-to-day development.
                        </p>
                        <div class="footer-contact">
                            <p>info@blaisemotors.com</p>
                            <p>+250 78899483</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="single-footer-widget">
                        <h2>about devloon</h2>
                        <ul>
                            <li><a href="{{ url('aboutUs') }}">about us</a></li>
                            <li><a href="{{ url('Homejob') }}">career(job opportunities)</a></li>
                            <li>
                                <a class="shadow" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <button type="button" class="">Rate us</button>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <form style="width:12cm" class="p-4" action="" method="post">
                                            <div class="row mt-5 inp-bright">
                                                <div class="col-12 col-sm-4 py-2 fadeInLeft">
                                                    <label>Names</label>
                                                    <input style="color:#b5b0b2;" name="commenter_name"
                                                        class="form-control">
                                                </div>

                                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                    <label>Email</label>
                                                    <input style="color:#b5b0b2;" class="form-control"
                                                        name="commenter_email">
                                                </div>
                                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                    <label>Phone</label>
                                                    <input style="color:#b5b0b2;" type="" class="form-control"
                                                        name="commenter_phone">
                                                </div>
                                                <div class="col-12 col-sm-8 py-2 wow fadeInRight">
                                                    <label>Your Message</label>
                                                    <textarea style="color:#b5b0b2;" type="" class="form-control"
                                                        name="commenter_message"></textarea>
                                                </div>
                                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                    <label>image(optional)</label>
                                                    <input style="color:#b5b0b2;" type="file" class="form-control"
                                                        name="commenter_image">
                                                </div>
                                                <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                                    <div class="float-lg-right text-bold">
                                                        <button type="button" class="btn btn-info m-1">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="single-footer-widget">
                        <h2>top brands sites</h2>
                        <div class="row">
                            <div class="col-md-7 col-xs-6">
                                <ul>
                                    <li><a href="https://www.bmw.com">BMW</a></li>
                                    <li><a href="https://www.lamborghini.com">lamborghini</a></li>
                                    <li><a href="https://www.chevrolet.com/performance/camaro">camaro</a></li>
                                    <li><a href="https://www.audi.com/en.html">audi</a></li>
                                    <li><a href="https://www.infinitiusa.com/">infiniti</a></li>
                                    <li><a href="https://www.nissanusa.com/">nissan</a></li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <ul>
                                    <li><a href="https://www.ferrari.com">ferrari</a></li>
                                    <li><a href="https://www.porsche.com/usa/">porsche</a></li>
                                    <li><a href="https://www.landrover.com">land rover</a></li>
                                    <li><a href="https://www.astonmartin.com/en/">aston martin</a></li>
                                    <li><a href="https://www.mercedes-benz.com/en/">mersedes</a></li>
                                    <li><a href="https://www.opel.com/">opel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h2>news letter</h2>
                        <div class="footer-newsletter">
                            <p>
                                Subscribe to get latest news update and informations
                            </p>
                        </div>
                        <div class="hm-foot-email">
                            <form action="{{ url('saveEmail') }}" method="POST">
                                @csrf
                                <div class="foot-email-box">
                                    <label for="name"></label>
                                    <input name="name" id="email" type="email" class="form-control"
                                        placeholder="Add Email">
                                </div>
                                <button type="submit" class="foot-email-subscribe">
                                    <span><i class="fa fa-arrow-right"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="row">
                <div class="col-sm-6">
                    <p>
                        &copy; copyright.designed and developed by <a href="">Blaise
                            Izerimana</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-Top">
        <div class="return-to-top">
            <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Back to Top" aria-hidden="true"></i>
        </div>
    </div>
</footer>

<script src="{{ asset('home/assets/js/jquery.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<script src="{{ asset('home/assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('home/assets/js/bootsnav.js') }}"></script>

<script src="{{ asset('home/assets/js/owl.carousel.min.js') }}"></script>

<script script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
</script>

<script src="{{asset('hr/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('home/assets/js/custom.js') }}"></script>

</body>

</html>