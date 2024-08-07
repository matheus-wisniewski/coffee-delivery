<!DOCTYPE html>
<html lang="en">

<head>
    @Vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffe Delivery</title>

</head>

<body class="flex-col flex-wrap bg-white w-screen h-screen bg-base-100">
    <header class="flex items-center justify-around bg-base-100 h-14 gap-2 p-2">
        <div class="grow-0 shrink-0">
            <img src="/img/coffee_logo.jpg" alt="brand logo">
        </div>

        <nav class="hidden md:block grow">
            <ul class="flex gap-2">
                <li>Home</li>
                <li>About</li>
                <li>Services</li>
                <li>Menu</li>
                <li>Schedule</li>
            </ul>
        </nav>

        <div class="flex md:hidden items-center justify-end size-full gap-2">
            <button>
                <img src="/img/search_icon.png" alt="search icon">
            </button>
            <a href="/login">Entrar</a>
        </div>
    </header>

    <main class="flex-col size-full p-4">
        <h1 class="text-base-900 text-[48px] leading-[130%] w-full h-[372px] font-Halant font-bold text-center">
            Craving
            the perfect cup of
            coffee?
            Our blends
            are
            <span class="text-primary-red">lovely and delicious.</span>
        </h1>

        <p class="text-base-600">With Coffee Delivery, you can have your coffee delivered to you wherever you are, at
            any time.</p>

        <div class="flex-col items-center h-[101.12px] w-[216px] bg-primary-brown">
            <p class="bg-primary-red]">Our partners:</p>
            <div class="flex bg-base-100">
                <img src="/img/coffee_partners.svg" alt="coffee partners logo">
                <img src="/img/coffee_partners.svg" alt="coffee partners logo">
                <img src="/img/coffee_partners.svg" alt="coffee partners logo">
            </div>
        </div>


        <div>
            <img src="/img/coffee_beans.jpg" alt="coffee beans">
            <img src="/img/coffee_cup.jpg" alt="coffee cup">
            <img src="/img/coffee_beans.jpg" alt="coffee beans">
        </div>
    </main>

    <article style="background-color: black; color: white;">
        <h2>#About us</h2>

        <h2>Nature & Love</h2>
        <p>At our company, we strive to make your coffee time more enjoyable. Since 2020, we have been providing
            high-quality coffee and excellent service.</p>
        <button>FIND A STORE NEAR TO YOU</button>

        <div>
            <img src="/img/verified_badge.svg" alt="verified badge"> Lorem ipsum dolor, sit amet consectetur. Tortor
            non.
            <img src="/img/verified_badge.svg" alt="verified badge"> Lorem ipsum dolor, sit amet consectetur. Tortor
            non.
            <img src="/img/verified_badge.svg" alt="verified badge"> Lorem ipsum dolor, sit amet consectetur. Tortor
            non.
            <img src="/img/verified_badge.svg" alt="verified badge"> Lorem ipsum dolor, sit amet consectetur. Tortor
            non.
        </div>

        <div>
            <img src="/img/mosaic1.jpg" alt="coffee mosaic" height="367px" width="186.79px">
            <img src="/img/mosaic2.jpg" alt="coffee mosaic 3" height="122.33px" width="189.01px">
            <img src="/img/mosaic3.jpg" alt="coffee mosaic 2" height="226.32px" width="186.06px">
        </div>
    </article>

    <article>
        <h2>#Our services</h2>

        <div>
            <img src="/img/delivery_icon.svg" alt="Delivery icon">
            <h3>Delivery</h3>
            <p>With our platform, we can deliver coffee straight to you, no matter where you are.</p>
            <button>Order coffee now</button>
        </div>

        <div>
            <img src="/img/schedule_icon.svg" alt="Schedule icon">
            <h3>Schedule</h3>
            <p>Planning an office party? or a coffee break with friends? Let us take care of everything</p>
            <button>Schedule our service</button>
        </div>

        <div>
            <img src="/img/stores_icon.svg" alt="stores icon">
            <h3>Stores</h3>
            <p>Find the nearest one and come try a new experience and taste for yourself.</p>
            <button>Find a store near you</button>
        </div>
    </article>

    <div>
        <img src="/img/product_icon.jpg" alt="products icon">
        <h2>Upgrade your experience</h2>
        <p>Upgrade your coffee experience. Try our fresh beans and taste the rich, delicious flavour for yourself. You
            won't be disappointed.</p>
        <button>OUR PRODUCTS</button>
    </div>

    <section>
        <h2>#order wherever you are</h2>

        <div>
            <img src="/img/brown_location_icon.svg" alt="brown location icon">
            <h2>Set your address</h2>
            <p>We use your address to find best partners and stores near to you.</p>
        </div>

        <div>
            <img src="/img/brown_cart_icon.svg" alt="brown cart icon">
            <h2>Add to cart</h2>
            <p>Customize the flavour, roast, size, and type to your preference.</p>
        </div>

        <div>
            <img src="/img/brown_coffee_icon.svg" alt="brown coffee icon">
            <h2>It's coffee time</h2>
            <p>After purchase, wait a few mins for you delicious and warm coffee.</p>
        </div>
    </section>

    <article style="background-color: black; color: white;">
        <h2>#variety of choices</h2>

        <div>
            <h3>Check out our menu</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>
        <div>
            <h3>Which size?</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>
        <div>
            <h3>Try our special blends</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>

        <div>
            <img src="/img/cup.jpg" alt="just a cup of coffee image">
        </div>

        <div>
            <h3>Upgrade your coffee</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>
        <div>
            <h3>Variety of milk</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>
        <div>
            <h3>Do you need more one?</h3>
            <p>Our coffees are carefully selected for quality, flavor, and social impact</p>
        </div>
    </article>

    <article>
        <h2>#Our products</h2>

        <div>
            <img src="/img/cup_of_coffee.jpg" alt="cup of coffee">
            <h3>Expresso coffee</h3>
            <p>Loreim ipsum dolor sit amet consectetur. Acondiment mi velit imperdiet cras cras in</p><span>$9.99</span>
        </div>
        <div>
            <img src="/img/cup_of_coffee.jpg" alt="cup of coffee">
            <h3>Expresso coffee</h3>
            <p>Loreim ipsum dolor sit amet consectetur. Acondiment mi velit imperdiet cras cras in</p><span>$9.99</span>
        </div>
        <div>
            <img src="/img/cup_of_coffee.jpg" alt="cup of coffee">
            <h3>Expresso coffee</h3>
            <p>Loreim ipsum dolor sit amet consectetur. Acondiment mi velit imperdiet cras cras in</p><span>$9.99</span>
        </div>
    </article>

    <article style="background-color: black; color: white;">
        <h2>#schedule your order</h2>

        <img src="/img/group_of_friends.jpg" alt="group of friends" height="284px" width="399px">

        <div>
            <h2>Grab a cup of coffee with your buds or at the office.</h2>
            <p>Lorem ipsum dolor sit amet consectetur. Justo faucibus fusce urna faucibus. Blandit sociis pulvinar
                habitasse aliquam arcu massa at mi consectetur. Faucibus ut elementum fames mauris amet pulvinar
                ultrices ut sed. Gravida ornare proin eleifend pulvinar ultrices sed in in integer. Ut est massa eget
                orci est egestas tellus felis ultricies. Eu tortor sed urna eget in vitae aliquam. Lacinia porttitor ut
                vitae est et. Enim placerat pellentesque est consectetur nibh aliquam tortor.</p>
            <button>ORDER NOW AND SCHEDULE YOUR DELIVERY</button>
        </div>

        <img src="/img/cute_icon.svg" alt="cute icon">
    </article>

    <footer style="background-color: black; color: white;">
        <img src="/img/coffee_logo.jpg" alt="brand logo">
        <p>Since 2020, we are turning your coffee time more pleasurous and comfortable.</p>
        <img src="/img/social_media_icon.svg" alt="social media icons">

        <ul>Quick Links
            <li>Home</li>
            <li>Products</li>
            <li>How it works</li>
            <li>My account</li>
            <li>My orders</li>
            <li>favorite coffees</li>
        </ul>

        <p>2022 &#169; Coffee Delivery</p>
        <p>Terms and conditions</p>
        <p>Privacy</p>
    </footer>
</body>

</html>