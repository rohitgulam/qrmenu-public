<?php require "header.php" ?>
<main class="main-container" >
    <div class="hero-desc">
        <h1>Upgrade your restaurant with a <span class="underline">QR Menu</span></h1>
        <p>itsqrmenu allows you to create a QR menu for your restaurant that can be accessed by your customers at their fingertips.</p>

        <a href="register.php" id="main-create-btn" class="btn">Join the waitlist</a>
        <p class="small">It's free</p>

    </div>

    <div class="device">
        <div class="screen">
            <div class="display" >
                <div class="menu-preview">
                    <div class="banner-area">
                        <div class="img"></div>
                        <h1 class="restaurant-name">Sub-Zero Ice Creams</h1>
                    </div>
                    <div class="menu-area">
                        <div class="menu-food-item">
                            <div class="name-price">
                                <h3 class="menu-food-title">Vanilla Ice Cream</h3>
                                <p class="menu-food-price">Tsh 3000</p>
                            </div>
                            <p class="menu-food-desc"> Good ol' vanilla ice cream</p>
                        </div>
                            <div class="menu-food-item">
                            <div class="name-price">
                                <h3 class="menu-food-title">Vanilla Ice Cream</h3>
                                <p class="menu-food-price">Tsh 3000</p>
                            </div>
                            <p class="menu-food-desc"> Good ol' vanilla ice cream</p>
                        </div>
                        <div class="menu-food-item">
                            <div class="name-price">
                                <h3 class="menu-food-title">Strawberry Ice Cream</h3>
                                <p class="menu-food-price">Tsh 3000</p>
                            </div>
                            <p class="menu-food-desc">Strawberry ice cream</p>
                        </div>
                        <div class="menu-food-item">
                            <div class="name-price">
                                <h3 class="menu-food-title">Chocolate Ice Cream</h3>
                                <p class="menu-food-price">Tsh 3000</p>
                            </div>
                            <p class="menu-food-desc">Chocolate ice cream</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-container">
        <div class="non-features">
            <h2>The old way of menus</h2>
            <ul>
                <li>You print out your menu</li>
                <li>You need to update it, so you print it again</li>
                <li>You hand the same menus to different customers everyday</li>
                <li>Unfortunately, a customer has COVID and touches your menu which is then touched by your waiters and other customers</li>
                <li>Due to this, a lot of your customers get COVID too</li>
                <li>People hear about this and stop coming to you restaurant</li>
                <li>Sales decrease forcing you to close down your restaurant</li>
            </ul>
        </div>
        <div class="features">
        <h2>The new way of menus</h2>
            <div class="features-grid" >
                <div class="feature-item">
                    <span class="icon">
                        <i class="fa-solid fa-mobile-screen"></i>
                    </span>
                    <h3>1. Create your menu </h3>
                    <p>Create your menu with you desired foods and drinks</p>
                </div>
                <div class="feature-item">
                    <span class="icon">
                        <i class="fa-solid fa-qrcode"></i>
                    </span>
                    <h3>2. Print your QR codes only once</h3>
                    <p>Print your QR codes only once and stick them to your tables</p>
                </div>
                <div class="feature-item">
                    <span class="icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </span>
                    <h3>3. Update your menu whenever you want</h3>
                    <p>Update your menu whenever you want without printing your QR codes again. </p>
                </div>
                <div class="feature-item">
                    <span class="icon">
                        <i class="fa-solid fa-virus-covid-slash"></i>
                    </span>
                    <h3>4. Decrease transmission of COVID</h3>
                    <p>Decrease COVID transmission by removing contact with traditional menus</p>
                </div>
            </div>
        </div>
    </div>
    <div class="core-features">
        <div class="header">
            <h2>The easiest way to create QR menus</h2>
            <p>Itsqrmenu was created to help restaurant owners create QR menus with ease. Print your QR codes once and update them wherever you want using your phone</p>
        </div>
        <div class="core-features-container">
            <div class="core-feature">
                <span class="icon-rounded"><i class="fa-solid fa-layer-group"></i></span>
                <div class="desc">
                    <h3>Infinite Food Entries</h3>
                    <p>Add as many foods to your menu as you want.</p>
                </div>
            </div>
            <div class="core-feature">
                <span class="icon-rounded"><i class="fa-solid fa-comment"></i></span>
                <div class="desc">
                    <h3>Food Description</h3>
                    <p>Add text description that describes your food.</p>
                </div>
            </div>
            <div class="core-feature">
                <span class="icon-rounded"><i class="fa-solid fa-pen"></i></span>
                <div class="desc">
                    <h3>Unlimited Updates</h3>
                    <p>Update your foods as much as you want</p>
                </div>
            </div>
        </div>
    </div>
    <div class="create-menu">
        <h2>How to create a Menu</h2>
        <div class="create-menu-container">
            <div class="create-menu-item">
                <h3>1. Create an account</h3>
                <p><a href="/register.php" class="link" >Click here</a> to create an account.</p>
                <img src="assets/create-account.webp" alt="Creating an account on itsqrmenu">
            </div>
            <div class="create-menu-item">
                <h3>2. Add your food items</h3>
                <p>Add all your food items from your regular menu to your new QR Menu.</p>
                <img src="assets/add-food.webp" alt="Adding foods on your QR menu">
            </div>
            <div class="create-menu-item">
                <h3>3. Print your QR codes!</h3>
                <p>Print you QR codes and stick them to your tables. Customer can access your menu by scanning the codes through their phone's camera or Google lens(available on every android phone)</p>
                <img src="assets/print-qrcodes.webp" alt="Printing your QR codes">
            </div>
        </div>
        <a href="register.php" id="main-create-btn" class="btn">Create My QR Menu</a>
    </div>
</main>
<?php require "footer.php" ?>
