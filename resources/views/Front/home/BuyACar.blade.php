<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blaise Motors</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('hr/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('hr/assets/css/styles.min.css') }}" />
</head>

<body>
    <div>
        <a href="{{ url('/') }}" class="btn btn-success float-end">back</a>
        <h4 class="text-center">Available Cars for sale</h4>
    </div>
    <br>
    <div class="end-0">
        <form class="d-flex float-end">
            <label for="query">Search</label>
            <input type="text" id="query" name="query" oninput="searchCars()" class="form-control" required>
        </form><br>
        <a href="" class="float-end">clear</a>
    </div>
    <main>
        <h2 id="results-heading"></h2>
        <ul id="results-list"></ul>

    </main>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <h2>featured cars</h2>
            </div>
            <div class="featured-cars-content">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc1.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#"></a></h2>
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <button type="button" class=" border-0 bg-body-emphasis">
                                        <h4>BMW 6-series gran coupe</h4>
                                    </button>
                                </a>
                                <div class="col-sm-6 dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class=" message-body">
                                        <form class=" p-4" action="" method="post">
                                            <h4 class="text-center">Order this car</h4>
                                            <div class="row  mt-5 inp-bright">
                                                <div class="col-12 col-sm-6 py-2 fadeInLeft">
                                                    <label>Names</label>
                                                    <input style="color:#b5b0b2;" name="order_name"
                                                        class="form-control">
                                                </div>
                                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                    <label>Phone</label>
                                                    <input style="color:#b5b0b2;" type="orderNo" class="form-control"
                                                        name="">
                                                </div>

                                                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                    <label>Payment mode</label>
                                                    <select style="color:#b5b0b2;" class="form-control"
                                                        name="patment_mode">
                                                        <option value="">select</option>
                                                        <option value="">Cash</option>
                                                        <option value="">Bank</option>
                                                        <option value="">Online</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                                    <div class="float-lg-right text-bold">
                                                        <button type="button" class="btn btn-info m-1">Forward</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <h3>$89,395</h3>
                                <p>
                                    Luxury meets performance in a sleek four-door design,
                                    boasting advanced tech and dynamic driving for enthusiasts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc2.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">chevrolet camaro <span>wmv20</span></a></h2>
                                <h3>$66,575</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc3.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">lamborghini <span>v520</span></a></h2>
                                <h3>$125,250</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc4.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">audi <span> a3</span> sedan</a></h2>
                                <h3>$95,500</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc4.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">infiniti <span>z5</span></a></h2>
                                <h3>$36,850</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc5.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">porsche <span>718</span> cayman</a></h2>
                                <h3>$48,500</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc7.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#"><span>bmw 8-</span>series coupe</a></h2>
                                <h3>$56,000</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc8.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a href="#">BMW <span> x</span>series-6</a></h2>
                                <h3>$75,800</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->


    </section>

    <script>
    // Sample data array (replace with your actual data)
    const carsData = [{
            name: 'BMW 6-series gran coupe',
            description: 'Luxury Sedan',
            price: 89395
        },
        {
            name: 'Chevrolet Camaro',
            description: 'Compact SUV',
            price: 66575
        },
        {
            name: 'Lamborghini',
            description: 'Sports Coupe',
            price: 125250
        },
        // ... add more cars as needed
    ];

    function searchCars() {
        const resultsList = document.getElementById('results-list');
        const resultsHeading = document.getElementById('results-heading');

        // Clear previous results
        resultsList.innerHTML = '';

        const query = document.getElementById('query').value.toLowerCase();

        // Filter data based on whether the typed characters are included in names
        const filteredResults = carsData.filter(car =>
            car.name.toLowerCase().includes(query)
        );

        if (filteredResults.length === 0) {
            resultsHeading.textContent = 'No results found.';
        } else {
            resultsHeading.textContent = 'Search Results:';
            // Display filtered results
            filteredResults.forEach(car => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<h2>${car.name}</h2>
                                          <p>Description: ${car.description}</p>
                                          <p>Price: $${car.price}</p>`;
                resultsList.appendChild(listItem);
            });
        }
    }
    </script>
</body>


<script src="../users/manager/hr/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js">
</script>

</html>