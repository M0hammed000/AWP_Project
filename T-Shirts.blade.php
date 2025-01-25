<!-- resources/views/products/t-shirts.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike T-shirts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
           
  
            background-color : #FFFFFF; 
           
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.9);
        }
        .navbar-brand img {
            height: 30px;
        }
        .nav-link {
            color: #8b8b8b !important;
        }
        .nav-link:hover {
            color: white !important;
        }
        .card {
            background-color: white;
            border-radius: 0;
            transition: transform 0.3s;
            
        }
        .card:hover {
            transform: scale(1.02);
        }
        .best-seller {
            color: #0066cc;
            text-decoration: none;
        }
        .size-chart {
            background-color: white;
            color: black;
        }
        .product-image {
            height: 250px;
            object-fit: contain;
        }
          
       
    </style>  
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images\logoo.png') }}" alt="Nike">
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Shoes</a>
                <a class="nav-link" href="#">T-shirts</a>
                <a class="nav-link" href="#">Pants</a>
                <a class="nav-link" href="#">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->      
    <div class="container mt-5">
        <h1 class="text-center mb-2">Welcome to the T-shirt section</h1>
        <div class="text-center mb-4">
            
        </div>

        <!-- Size Chart -->
        <div class="mb-5">
            <h2 class="text-center mb-4">Size Chart</h2>
            {{-- <div class="table-responsive">
                <table class="table table-bordered size-chart">
                    <thead>
                        <tr>
                            <th>Size</th>
                            <th>Bust (inches)</th>
                            <th>Waist (inches)</th>
                            <th>Hips (inches)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Small</td>
                            <td>32-34</td>
                            <td>25-27</td>
                            <td>34-36</td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td>36-38</td>
                            <td>28-30</td>
                            <td>38-40</td>
                        </tr>
                        <tr>
                            <td>Large</td>
                            <td>40-42</td>
                            <td>32-34</td>
                            <td>42-44</td>
                        </tr>
                        <tr>
                            <td>X-Large</td>
                            <td>44-46</td>
                            <td>36-38</td>
                            <td>46-48</td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('images/T_Shirts/Black_T_Shirt.webp') }}" class="card-img-top product-image" alt="Red T-shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Red T-shirt</h5>
                        <p>Our best products from the T-shirts section</p>
                        <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('images/T_Shirts/Blue_T_Shirt.webp') }}" class="card-img-top product-image"  alt="Blue T-shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Blue T-shirt</h5>
                        <p>Our best products from the T-shirts section</p>
                        <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('images/T_Shirts/Red_T_Shirt.webp') }}" class="card-img-top product-image" alt="Black T-shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">Black T-shirt</h5>
                        <p>Our best products from the T-shirts section</p>
                        <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100">
                    <img src="{{ asset('images/T_Shirts/White_T_Shirt.webp') }}" class="card-img-top product-image" alt="White T-shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title text-dark">White T-shirt</h5>
                        <p>Our best products from the T-shirts section</p>
                        <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>