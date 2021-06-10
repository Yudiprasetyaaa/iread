<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <style>
        body {
            background-image: url("storage/bg1.png");
            background-repeat: no-repeat;
            background-size:cover
        }
      </style>
</head>
<body>
    @extends('template')

    @section('content')
    <p class="fs-5" style="text-align: justify"><img src="storage/logo2.png" width="400" height="400" style="float: right">
        I-Read Online Bookstore is one of the online book shopping places that was built to sell products in the form of books and the like.
        The I-Read Online Bookstore can be visited by anyone, both young and old to find and buy the books you want without having to leave the house, you just open our website and you can order directly the books in our catalog, we ready to deliver to your place.
    </p>
    <p class="fs-5" style="text-align: justify">
        Convenience and price are our guidelines at I-Read, with a fast response we will be ready to serve your needs.
    </p>
    <p class="fs-5" style="text-align: justify">
        Advantages of shopping at our online bookstore:
    </p>
    <ul class="fs-5">
        <li>It's very easy to choose the book you are looking for by category</li>
        <li>We also provide discounts for you from 10% – 30%</li>
        <li>The search field makes it easy for you to find the book you want</li>
        <li>You can see reviews from previous buyers</li>
        <li>In the Additional Information Column, you can see details of the books we sell, from Size, Author, Publisher and Year of manufacture</li>
        <li>We will always try to provide fast and cheap service for book lovers in the country</li>
      </ul>
      <p class="fs-5" style="text-align: justify">
        Thank you for visiting our online bookstore.
    </p>
      <p class="fs-5" style="text-align: justify">
        I-Read Team.
    </p>

    @endsection
</body>
</html>