@include('Front.home.include.header')
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    line-height: 1.6;
}

iframe {
    width: 100%;
    height: 400px;
    margin-bottom: 20px;
}

h1 {
    color: #333;
}

p {
    color: #555;
}

.container {
    max-width: 800px;
    margin: 0 auto;
}
</style>
</head>

<body>
    <a href="{{ url('') }}" class="float-end">
        < </a>
            <div class="container">
                <h1>About Us - Your Car Buying Partner</h1>
                <p>Welcome to Blaise Motors company, your trusted partner in the exciting journey of buying the perfect
                    car!</p>
                <p>At Blaise Motors company, we understand that the process of buying a car is not just a transaction;
                    it's a
                    significant milestone in your life. Whether you're looking for a sleek and stylish sedan, a rugged
                    SUV for
                    your family adventures, or a high-performance sports car, we are here to guide you every step of the
                    way.
                </p>

                <p>Our team is passionate about cars, and we've built Blaise Motors company on a foundation of trust,
                    transparency, and exceptional service. We carefully curate a diverse selection of quality vehicles,
                    ensuring
                    that you have the best options to choose from.</p>

                <p>What sets us apart is our commitment to providing a seamless and enjoyable car-buying experience. Our
                    knowledgeable staff is ready to answer your questions, provide expert advice, and assist you in
                    finding the
                    vehicle that matches your preferences and lifestyle.</p>

                <p>Whether you're a first-time car buyer or a seasoned enthusiast, Blaise Motors company is here to make
                    your
                    car-buying journey memorable. Explore our inventory, take a test drive, and let us help you drive
                    away with
                    the car of your dreams.</p>

                <p>Thank you for considering Blaise Motors company as your trusted car-buying partner. We look forward
                    to
                    serving
                    you and being a part of your automotive adventures!</p>

                <br>
                <h1>Watch a video instead</h1>
                <br>
                <iframe width="560" height="315" src="{{asset('vid.mp4')  }}" frameborder="0" allowfullscreen></iframe>

            </div>
@include('Front.home.include.header')
</body>

</html>
