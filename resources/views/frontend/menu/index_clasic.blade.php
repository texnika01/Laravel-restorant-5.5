@extends('frontend.layouts.app')

@section('content')
    <div class="main">
        <div class="content single">
            <article>
                <!-- Article Header -->
                <div class="article-header centered clearfix">
                    <div class="title-block">
                        <!-- Article Title -->
                        <h2>The Menu</h2>
                        <img src="img/frontend/menu.jpg" width="150" alt="Food Menu">
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    <!-- Menu Section -->
                    <section class="classic-menu">
                        <h2>starters</h2>

                        <h4>Grilled Asparagus &amp; Bruschetta <span class="dish-price">8.40, -</span></h4>
                        <p class="dish-details">Proin sed mauris eu quam hendrerit consequat sit amet eget mi</p>

                        <h4>Carpaccio di manzo<span class="dish-price">5.00, -</span></h4>
                        <p class="dish-details">Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat facilisis. Mauris eget justo mauris.</p>

                        <h4>Mini Smoked Salmon<span class="dish-price">7.50, -</span></h4>
                        <p class="dish-details">Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium. Mauris elementum dolor velit</p>

                        <h4>Salmon Tartare<span class="dish-price">12.00, -</span></h4>
                        <p class="dish-details">Ut neque ligula, placerat et purus sit amet, malesuada interdum purus</p>

                        <h4>Bresaola salad <span class="dish-price">6,30, -</span></h4>
                        <p class="dish-details">Quisque at egestas sapien. Maecenas sit amet sem ac nibh dapibus feugiat</p>

                        <h4>Sweet Potato Fries, Garlic Aioli<span class="dish-price">7.60, -</span></h4>
                        <p class="dish-details">Praesent nulla massa, imperdiet vel lacus et, tincidunt ullamcorper justo. Nullam a tellus ligula</p>
                    </section>

                    <!-- Menu Section -->
                    <section class="classic-menu">
                        <h2>mains</h2>
                        <h4>Chicken and prosciutto parmigiana<span class="dish-price">12.40, -</span></h4>
                        <p class="dish-details">Praesent auctor ante eu aliquet posuere. Cras a mauris at erat pulvinar pharetra sed vel felis</p>

                        <h4>Salmon with white bean mash<span class="dish-price">15.00, -</span></h4>
                        <p class="dish-details">Sed at est non metus ullamcorper facilisis vel tristique felis. Donec faucibus dolor leo</p>

                        <h4>Butter chicken with naan<span class="dish-price">14.50, -</span></h4>
                        <p class="dish-details">Sed consequat vel ipsum in sollicitudin. Etiam molestie, urna id placerat bibendum</p>

                        <h4>French roast chicken with whole garlic<span class="dish-price">17.00, -</span></h4>
                        <p class="dish-details">Nulla tellus velit, ultricies ut metus ut, aliquet venenatis libero. Maecenas dapibus lorem</p>

                        <h4>Salmon with black bean noodles<span class="dish-price">16.20, -</span></h4>
                        <p class="dish-details">Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</p>

                        <h4>Slow-cooked lemon and thyme lamb shanks<span class="dish-price">19.00, -</span></h4>
                        <p class="dish-details">Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</p>

                        <h4>Tandoori chicken puffs<span class="dish-price">18.50, -</span></h4>
                        <p class="dish-details">Estibulum sit amet velit sit amet ante sodales euismod sit amet a mi</p>

                        <h4>Spiced lamb cutlets with garlic tomato salad<span class="dish-price">11.10, -</span></h4>
                        <p class="dish-details">Vivamus imperdiet metus vitae lacus mattis, ac blandit tortor commodo</p>

                        <h4>Chilli pork and basil stir-fry<span class="dish-price">22.50, -</span></h4>
                        <p class="dish-details">Phasellus cursus turpis et metus porttitor, sed feugiat justo posuere</p>
                    </section>

                    <!-- Menu Section -->
                    <section class="classic-menu">
                        <h2>desserts</h2>
                        <h4>Prune Armagnac cake<span class="dish-price">6.20, -</span></h4>
                        <p class="dish-details">Donec condimentum nunc ut ligula convallis</p>

                        <h4>Mixed nut &amp; honey baklava<span class="dish-price">4.00, -</span></h4>
                        <p class="dish-details">Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</p>

                        <h4>Baked cranberry cheesecake<span class="dish-price">8.50, -</span></h4>
                        <p class="dish-details">Estibulum sit amet velit sit amet ante sodales euismod sit amet</p>

                        <h4>Chocolate ice cream<span class="dish-price">5.10, -</span></h4>
                        <p class="dish-details">Vivamus imperdiet metus vitae lacus mattis, ac blandit tortor commodo</p>

                        <h4>Rich chocolate tart with salt flakes<span class="dish-price">8.50, -</span></h4>
                        <p class="dish-details">Phasellus cursus turpis et metus porttitor, sed feugiat justo posuere</p>

                        <h4>Vegan Victoria sponge<span class="dish-price">5.00, -</span></h4>
                        <p class="dish-details">Nunc ullamcorper gravida magna vitae consectetur</p>

                        <h4>Chocolate &amp; raspberry tart<span class="dish-price">7.50, -</span></h4>
                        <p class="dish-details">Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium</p>

                    </section>
                    <!-- Menu Section -->

                    <section class="classic-menu">
                        <h2>wines</h2>

                        <h4>Chardonnay, Lincourt 'Steel'<span class="dish-price">8.40, - ( 150ml )</span></h4>
                        <p class="dish-details">Proin sed mauris eu quam hendrerit consequat sit amet</p>

                        <h4>Chenin Blanc<span class="dish-price">9.00, - ( 150ml )</span></h4>
                        <p class="dish-details">Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat facilisis</p>

                        <h4>Garntaxa Blanca<span class="dish-price">7.50, - ( 150ml )</span></h4>
                        <p class="dish-details">Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium</p>

                        <h4>Pinot Grigio<span class="dish-price">12.00, - ( 150ml )</span></h4>
                        <p class="dish-details">Ut neque ligula, placerat et purus sit amet, malesuada interdum purus</p>

                        <h4>Rose of Grenache<span class="dish-price">13.30, - ( 150ml )</span></h4>
                        <p class="dish-details">Quisque at egestas sapien. Maecenas sit amet sem ac nibh dapibus feugiat</p>

                        <h4>Bordeaux Blend<span class="dish-price">15.60, - ( 150ml )</span></h4>
                        <p class="dish-details">Praesent nulla massa, imperdiet vel lacus et</p>
                    </section>

                    <!-- Menu Section -->
                    <section class="classic-menu">
                        <h2>drinks</h2>
                        <h4>Tea<span class="dish-price">4.20, -</span></h4>
                        <p class="dish-details">Earl Grey, Peppermint, Chamomile, English Breakfast</p>

                        <h4>Coffe<span class="dish-price">4.50, -</span></h4>
                        <p class="dish-details">Flat Black, Flat White, Cafe Latte, Chai Latte, Cappucino, Short Espresso</p>

                        <h4>Hot Chocolate<span class="dish-price">5.00, -</span></h4>
                        <p class="dish-details">Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat facilisis.</p>

                        <h4>Extras<span class="dish-price">0.50, -</span></h4>
                        <p class="dish-details">Vanilla, Hazelnut, Caramel, Extra shot, Decaf, Soy</p>

                        <h4>Cold Drinks</h4>
                        <p class="dish-details">Available at Bar</p>
                    </section>

                    <!-- Social Share -->
                    <div class="social-share clearfix">
                        <ul>
                            <li class="facebook">
                                <a href="https://www.facebook.com/sharer.php?u=http://www.seventhemes.com" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <svg version="1.1" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                        <path class="inner-shape" d="M9.5 3h2.5v-3h-2.5c-1.93 0-3.5 1.57-3.5 3.5v1.5h-2v3h2v8h3v-8h2.5l0.5-3h-3v-1.5c0-0.271 0.229-0.5 0.5-0.5z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/share?url=http://www.seventhemes.com&amp;text=Loyale+Template" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <svg version="1.1" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                        <path class="inner-shape" d="M16 3.538c-0.588 0.263-1.222 0.438-1.884 0.516 0.678-0.406 1.197-1.050 1.444-1.816-0.634 0.375-1.338 0.65-2.084 0.797-0.6-0.638-1.453-1.034-2.397-1.034-1.813 0-3.281 1.469-3.281 3.281 0 0.256 0.028 0.506 0.084 0.747-2.728-0.138-5.147-1.444-6.766-3.431-0.281 0.484-0.444 1.050-0.444 1.65 0 1.138 0.578 2.144 1.459 2.731-0.538-0.016-1.044-0.166-1.488-0.409 0 0.013 0 0.028 0 0.041 0 1.591 1.131 2.919 2.634 3.219-0.275 0.075-0.566 0.116-0.866 0.116-0.212 0-0.416-0.022-0.619-0.059 0.419 1.303 1.631 2.253 3.066 2.281-1.125 0.881-2.538 1.406-4.078 1.406-0.266 0-0.525-0.016-0.784-0.047 1.456 0.934 3.181 1.475 5.034 1.475 6.037 0 9.341-5.003 9.341-9.341 0-0.144-0.003-0.284-0.009-0.425 0.641-0.459 1.197-1.038 1.637-1.697z"></path>
                                    </svg>
                                </a>
                            </li>
                            <li class="googlePlus">
                                <a href="https://plus.google.com/share?url=http://www.seventhemes.com" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <svg version="1.1" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                                        <path class="inner-shape" d="M5.091 7.147v1.747h2.888c-0.116 0.75-0.872 2.197-2.888 2.197-1.737 0-3.156-1.441-3.156-3.216s1.419-3.216 3.156-3.216c0.991 0 1.65 0.422 2.028 0.784l1.381-1.331c-0.888-0.828-2.037-1.331-3.409-1.331-2.816 0.003-5.091 2.278-5.091 5.094s2.275 5.091 5.091 5.091c2.937 0 4.888-2.066 4.888-4.975 0-0.334-0.037-0.591-0.081-0.844h-4.806z"></path>
                                        <path class="inner-shape" d="M16 7h-1.5v-1.5h-1.5v1.5h-1.5v1.5h1.5v1.5h1.5v-1.5h1.5z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- Background Section -->
    <div class="background">
        <div class="background-image" style="background-image: url('/img/frontend/article-2.jpg');">
            <div class="mask"></div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-overlay">
        <button class="mobile-toggle dismiss"><span></span></button>
        <div class="mobile-nav clearfix"></div>
    </div>
@endsection