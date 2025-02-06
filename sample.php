<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-Commerce store </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .product-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background: white;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .product-card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 100%; 
        height: 180px; 
        object-fit: contain; 
        border-radius: 10px;
        margin-bottom: 10px;
        background: #f8f8f8; 
        padding: 10px;

        }
        .header {
            background: #007bff;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .search-bar {
            display: flex;
            gap: 5px;
        }
        .search-bar input {
            border-radius: 5px;
            border: none;
            padding: 5px;
            width: 200px;
        }
        .search-bar button {
            background: white;
            color: #007bff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .search-bar button:hover {
            background: #ddd;
        }
        .footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
        .footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
            
        }
           
    
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <!-- <h2><img src="logo.webp" alt="logo"></h2> -->
        </div>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search products...">
            <button>Search</button>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block sidebar">
                <h4 class="text-center">Dashboard</h4>
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Orders</a>
                <a href="#">Customers</a>
                <a href="#">Reports</a>
                <a href="#">Settings</a>
            </nav>
            <main class="col-md-10 p-4">
                <h2 class="mb-4">E-Commerce Dashboard</h2>
                <div class="row" id="product-list"></div>
            </main>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2025 E-Commerce. All Rights Reserved.</p>
        <p>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </p>
    </footer>
    <script>
        const products = [
            { name: 'MacBook Pro', image: 'macbook.jpg' },
            { name: 'iPhone 11 Pro Max', image: 'iphone 11.jpg' },
            { name: 'Samsung Galaxy S21', image: 'sumsung.jpg' },
            { name: 'Sony Headphones', image: 'headphones.webp' },
            { name: 'Smart Watch', image: 'watch.webp' }
        ];

        function generatePrice() {
            return (Math.random() * (500 - 50) + 50).toFixed(2);
        }

        function displayProducts() {
            const productList = document.getElementById("product-list");
            productList.innerHTML = "";
            products.forEach(product => {
                const productDiv = document.createElement("div");
                productDiv.classList.add("col-md-4");
                productDiv.innerHTML = `
                    <div class="product-card">
                        <img src="${product.image}" alt="${product.name}">
                        <h5>${product.name}</h5>
                        <p>$${generatePrice()}</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                `;
                productList.appendChild(productDiv);
            });
        }
        
        displayProducts();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>