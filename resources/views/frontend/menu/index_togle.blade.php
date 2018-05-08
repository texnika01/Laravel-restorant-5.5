@extends('frontend.layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="main">
        <div class="content single">
            <article>
                <!-- Article Header -->
                <div class="article-header clearfix">
                    <div class="title-block">
                        <!-- Article Title -->
                        <h2>The Menu</h2>
                    </div>
                </div>
                <!--Article Content -->
                <div class="article-content clearfix">
                    <!-- Collapsed Menu -->
                    <h3 class="toggle-header active"><a href="#">Starters</a></h3>
                    <div class="toggle-panel active centered">
                        <h3>Grilled Asparagus &amp; Bruschetta</h3>
                        <p><em>Proin sed mauris eu quam hendrerit consequat sit amet eget mi</em></p>
                        <h4>8.40, -</h4>
                        <hr>
                        <h3>Carpaccio di manzo</h3>
                        <p><em>Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat
                                facilisis. Mauris eget justo mauris.</em></p>
                        <h4>5.00, -</h4>
                        <hr>
                        <h3>Mini Smoked Salmon</h3>
                        <p><em>Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium.
                                Mauris elementum dolor velit</em></p>
                        <h4>7.50, -</h4>
                        <hr>
                        <h3>Salmon Tartare</h3>
                        <p><em>Ut neque ligula, placerat et purus sit amet, malesuada interdum purus</em></p>
                        <h4>12.00, -</h4>
                        <hr>
                        <h3>Bresaola salad</h3>
                        <p><em>Quisque at egestas sapien. Maecenas sit amet sem ac nibh dapibus feugiat</em></p>
                        <h4>6.30, -</h4>
                        <hr>
                        <h3>Sweet Potato Fries, Garlic Aioli</h3>
                        <p><em>Praesent nulla massa, imperdiet vel lacus et, tincidunt ullamcorper justo.
                                Nullam a tellus ligula</em></p>
                        <h4>7.60, -</h4>
                    </div>

                    <!-- Collapsed Menu -->
                    <h3 class="toggle-header"><a href="#">Mains</a></h3>
                    <div class="toggle-panel centered">
                        <h3>Chicken and prosciutto parmigiana</h3>
                        <p><em>Praesent auctor ante eu aliquet posuere. Cras a mauris at erat pulvinar pharetra sed vel felis</em></p>
                        <h4>12.40, -</h4>
                        <hr>
                        <h3>Salmon with white bean mash</h3>
                        <p><em>Sed at est non metus ullamcorper facilisis vel tristique felis. Donec faucibus dolor leo</em></p>
                        <h4>15.00, -</h4>
                        <hr>
                        <h3>Butter chicken with naan</h3>
                        <p><em>Sed consequat vel ipsum in sollicitudin. Etiam molestie, urna id placerat bibendum</em></p>
                        <h4>14.50, -</h4>
                        <hr>
                        <h3>French roast chicken with whole garlic</h3>
                        <p><em>Nulla tellus velit, ultricies ut metus ut, aliquet venenatis libero. Maecenas dapibus lorem<br></em></p>
                        <h4>17.00, -</h4>
                        <hr>
                        <h3>Salmon with black bean noodles</h3>
                        <p><em>Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</em></p>
                        <h4>16.20, -</h4>
                        <hr>
                        <h3>Slow-cooked lemon and thyme lamb shanks</h3>
                        <p><em>Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</em></p>
                        <h4>19.00, -</h4>
                        <hr>
                        <h3>Tandoori chicken puffs</h3>
                        <p><em>Estibulum sit amet velit sit amet ante sodales euismod sit amet a mi</em></p>
                        <h4>18.50, -</h4>
                        <hr>
                        <h3>Spiced lamb cutlets with garlic tomato salad</h3>
                        <p><em>Vivamus imperdiet metus vitae lacus mattis, ac blandit tortor commodo</em></p>
                        <h4>11.10, -</h4>
                        <hr>
                        <h3>Chilli pork and basil stir-fry</h3>
                        <p><em>Phasellus cursus turpis et metus porttitor, sed feugiat justo posuere</em></p>
                        <h4>22.50, -</h4>
                    </div>

                    <!-- Collapsed Menu -->
                    <h3 class="toggle-header"><a href="#">Desserts</a></h3>
                    <div class="toggle-panel centered">
                        <h3>Prune &amp; Armagnac cake</h3>
                        <p><em>Donec condimentum nunc ut ligula convallis</em></p>
                        <h4>6.20, -</h4>
                        <hr>
                        <h3>Mixed nut &amp; honey baklava</h3>
                        <p><em>Donec condimentum nunc ut ligula convallis, ut posuere leo adipiscing</em></p>
                        <h4>4.00, -</h4>
                        <hr>
                        <h3>Baked cranberry cheesecake</h3>
                        <p><em>Estibulum sit amet velit sit amet ante sodales euismod sit amet<br></em></p>
                        <h4>8.50, -</h4>
                        <hr>
                        <h3>Chocolate ice cream</h3>
                        <p><em>Vivamus imperdiet metus vitae lacus mattis, ac blandit tortor commodo</em></p>
                        <h4>5.10, -</h4>
                        <hr>
                        <h3>Rich chocolate tart with salt flakes</h3>
                        <p><em>Phasellus cursus turpis et metus porttitor, sed feugiat justo posuere</em></p>
                        <h4>8.50, -</h4>
                        <hr>
                        <h3>Vegan Victoria sponge</h3>
                        <p><em>Nunc ullamcorper gravida magna vitae consectetur</em></p>
                        <h4>5.00, -</h4>
                        <hr>
                        <h3>Chocolate &amp; raspberry tart</h3>
                        <p><em>Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium</em></p>
                        <h4>7.50, -</h4>
                    </div>
                    <!-- Collapsed Menu -->
                    <h3 class="toggle-header"><a href="#">Wines</a></h3>
                    <div class="toggle-panel centered">
                        <h3>Chardonnay, Lincourt 'Steel'</h3>
                        <p><em>Proin sed mauris eu quam hendrerit consequat sit amet</em></p>
                        <h4>8.40, - ( 150ml )</h4>
                        <hr>
                        <h3>Chenin Blanc</h3>
                        <p><em>Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat facilisis<br></em></p>
                        <h4>9.00, -&nbsp; ( 150ml )</h4>
                        <hr>
                        <h3>Garntaxa Blanca</h3>
                        <p><em>Nulla vulputate nunc vitae augue tempor, vel venenatis quam pretium</em></p>
                        <h4>7.50, -&nbsp; ( 150ml )</h4>
                        <hr>
                        <h3>Pinot Grigio</h3>
                        <p><em>Ut neque ligula, placerat et purus sit amet, malesuada interdum purus</em></p>
                        <h4>12.00, -&nbsp; ( 150ml )</h4>
                        <hr>
                        <h3>Rose of Grenache</h3>
                        <p><em>Quisque at egestas sapien. Maecenas sit amet sem ac nibh dapibus feugiat</em></p>
                        <h4>13.30, -&nbsp; ( 150ml )</h4>
                        <hr>
                        <h3>Bordeaux Blend</h3>
                        <p><em>Praesent nulla massa, imperdiet vel lacus et</em></p>
                        <h4>15.60, -&nbsp; ( 170ml )</h4>
                    </div>

                    <!-- Collapsed Menu -->
                    <h3 class="toggle-header"><a href="#">Drinks</a></h3>
                    <div class="toggle-panel centered">
                        <h3>Tea</h3>
                        <p><em>Earl Grey / Peppermint / Chamomile / English Breakfast</em></p>
                        <h4>4.20, -</h4>
                        <hr>
                        <h3>Coffe</h3>
                        <p><em>Flat Black / Flat White / Cafe Latte / Chai Latte / Cappucino / Short Espresso</em></p>
                        <h4>4.50, -</h4>
                        <hr>
                        <h3>Hot Chocolate</h3>
                        <p><em>Nunc ullamcorper gravida magna vitae consectetur. Sed pulvinar feugiat facilisis.<br></em></p>
                        <h4>5.00, -</h4>
                        <hr>
                        <h3>Extras</h3>
                        <p><em>Vanilla / Hazelnut / Caramel / Extra shot / Decaf / Soy</em></p>
                        <h4>0.50, -</h4>
                        <hr>
                        <h3>Cold Drinks</h3>
                        <p><em>Available at Bar</em></p>
                        <h4>, -</h4>
                    </div>

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
    <!-- End Main Container -->
    </div>

    <!-- Background Section -->
    <div class="background">
        <div class="background-image" style="background-image: url('/img/frontend/background/appetizers.jpg');">
            <div class="mask"></div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div class="mobile-overlay">
        <button class="mobile-toggle dismiss"><span></span></button>
        <div class="mobile-nav clearfix"></div>
    </div>

    <!-- To Top Button -->
    <button class="totop">&uarr;</button>
@endsection