<?php require_once './includes/header.php'; ?>

<!-- Section: Main Content -->
<section id="main-content">

<!-- Fixed left nav when scrolling -->
<script>
$("document").ready(function($){
   var leftNav = $('#left-nav');
   $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
          leftNav.addClass("fixed-left-nav");
      } else {
          leftNav.removeClass("fixed-left-nav");
      }

      var scrollBottom = $(document).height() - $(window).height() - $(this).scrollTop();

      if (scrollBottom < 150) {
          leftNav.removeClass("fixed-left-nav");
      } 
   });
});
</script>
 
<div class="row"> <!-- Left column: navigation + gutter - Right column: menu -->
    <!-- Menu navigation (left)-->
    <div class="col-md-4 col-sm-4 hidden-xs">
        <nav id="left-nav">
            <ul>
                <li><a href="#insalate">Insalate<br><span class="subdued">(Salads)</span></a></li>
                <li><a href="#antipasti">Antipasti<br><span class="subdued">(Appetizers)</span></a></li>
                <li><a href="#zuppe">Zuppe<br><span class="subdued">(Soups)</span></a></li>
                <li><a href="#contorni">Contorni<br><span class="subdued">(Side Dishes)</span></a></li>
                <li><a href="#specialita">Specialit&agrave; della Casa<br><span class="subdued">(House Specialties)</span></a></li>
                <li><a href="#paste">Paste<br><span class="subdued">(Pastas)</span></a></li>
                <li><a href="#pollo">Pollo<br><span class="subdued">(Chicken Dishes)</span></a></li>
                <li><a href="#vitello">Vitello<br><span class="subdued">(Veal Dishes)</span></a></li>
                <li><a href="#dolci">Dolci<br><span class="subdued">(Desserts)</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- Menu items (right) -->
    <div id="right-menu" class="col-md-8 col-sm-7 col-md-offset-0 col-sm-offset-1">
        <div class="row">
            <div id="insalate" class="menu col-sm-11 ">
                <h2 class="center">Insalate</h2>
                <ul>
                    <li>
                        <b>fresca del giardino</b> 5.75<br>
                        fresh house garden salad with house dressing
                        <br><i>with gorgonzola</i> 7.00
                    </li>
                    <li>
                        <b>insalata caprese</b> 8.95<br>
                        sliced fresh tomatoes topped with basil, sun-dried tomatoes and fresh mozzarella
                    </li>
                    <li>
                        <b>insalata italiana</b> 9.50<br>
                        mixed greens, roasted peppers, fresh mozzarella, cherry tomatoes and black olives
                    </li>
                    <li>
                        <b>insalata agro dolce</b> 9.50<br>
                        mixed greens, sliced fresh apples, walnuts, gorgonzola with balsamic vinaigrette
                    </li>
                    <li>
                        <b>baby spinach salad</b> 9.50<br>
                        fresh artichokes, roasted peppers and cherry tomatoes
                    </li>
                    <li>
                        <b>caesar salad</b> <i>small</i> 7.50 / <i>large</i> 8.50<br>
                        <i>add chicken</i> 3.50
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="antipasti" class="menu col-sm-11 ">
                <h2 class="center">Antipasti</h2>
                <ul>
                    <li>
                        <b>bruschetta</b> 7.75<br>
                        fire-toasted roman-style bread topped with diced fresh tomatoes, 
                        italian herbs and drizzled with extra virgin olive oil
                    </li>
                    <li>
                        <b>polenta</b> 8.75<br>
                        served with gorgonzola cream sauce and fresh mushrooms
                    </li>
                    <li>
                        <b>calamari fritti</b> 9.75<br>
                        fresh baby squid, lightly battered and served with marinara sauce
                    </li>
                    <li>
                        <b>calamari alla griglia</b> 10.75<br>
                        fire-grilled baby squid with roasted peppers, drizzled with extra 
                        virgin olive oil, lemon and fresh spices
                    </li>
                    <li>
                        <b>cozze</b> 10.95<br>
                        fresh mussels sauteed in your choice of white wine and garlic or marinara sauce
                    </li>
                    <li>
                        <b>funghi alla griglia</b> 8.95<br>
                        fire-grilled portobello mushroom caps, marinated in extra virgin 
                        olive oil and topped with fresh italian spices
                    </li>
                    <li>
                        <b>melanzane caprese</b> 8.25<br>
                        marinated eggplant medallions topped with fresh mozzarella, basil and marinara sauce
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="zuppe" class="menu col-sm-11 ">
                <h2 class="center">Zuppe</h2>
                <ul>
                    <li>
                        <b>stracciatelle con tortellini</b> 6.50<br>
                        spinach and egg drop soup with tortellini in chicken broth
                    </li>
                    <li>
                        <b>zuppa del giorno</b> 5.50<br>
                        soup of the day
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="contorni" class="menu col-sm-11 ">
                <h2 class="center">Contorni</h2>
                <ul>
                    <li>
                        <b>vesuvio potaotoes</b> 5.50<br>
                        oven-roasted with garlic, italian herbs and white wine
                    </li>
                    <li>
                        <b>fresh spinach</b> 6.50<br>
                        saut&eacute;ed with garlic, extra virgin olive oil and lemon
                    </li>
                    <li>
                        <b>fresh broccoli</b> 5.50<br>
                        steamed with garlic, extra virgin olive oil and lemon
                    </li>
                    <li>
                        <b>polenta</b> 6.00<br>
                        baked italian corn meal served with light marinara or hearty
                        bolognese sauce
                    </li>
                    <li>
                        <b>homemade italian meatballs or sausage</b> 5.50
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="specialita" class="menu col-sm-11 ">
                <h2 class="center">Specialit&aacute; della Casa</h2>
                <ul>
                    <li>
                        <b>risotto ai funghi</b> 18.00<br>
                        arborio rice with mushrooms and a touch of cream
                    </li>
                    <li>
                        <b>risotto verde</b> 20.00<br>
                        arborio rice in a garlic spinach sauce with chicken, 
                        mushrooms and fresh artichokes
                    </li>
                    <li>
                        <b>risotto primavera</b> 23.00<br>
                        arborio rice with shrimp, fresh vegetables, garlic and white wine
                    </li>
                    <li>
                        <b>eggplant parmigiana</b> 16.50<br>
                        fresh eggplant baked with marinara sauce and fresh mozzarella<br>
                        (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>steak vino rosso</b> 24.00<br>
                        filet mignon medallions grilled with mushrooms and red wine<br>
                        (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>pork chops alle noci</b> 21.00<br>
                        grilled with fresh rosemary, walnuts and topped with gorgonzola cheese sauce<br>
                        (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>grilled salmon</b> 21.00<br>
                        fire-grilled fresh salmon, served with steamed broccoli<br>
                        (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="paste" class="menu col-sm-11 ">
                <h2 class="center">Paste</h2>
                <ul>
                    <li>
                        <b>farfalle della nonna</b> 17.00 <br>
                        bow tie pasta with italian sausage, peas, mushrooms, 
                        tomatoes and onions in tomato cream sauce
                    </li>
                    <li>
                        <b>lobster ravioli</b> 21.00<br>
                         ravioli pasta filled with lobster in a light mascarpone 
                         cheese sauce with peas and tomatoes
                    </li>
                    <li>
                        <b>linguine vongole</b> 18.00<br>
                        thin flat noodles in a red or white clam sauce<br>
                    </li>
                    <li>
                        <b>linguine diavola</b> 21.00<br>
                         thin flat noodles with shrimp and sea scallops in a spicy marinara sauce
                    </li>
                    <li>
                        <b>linguine pesto</b> 16.00<br>
                         thin flat noodles with pesto sauce of fresh basil, garlic, 
                         parmigiano cheese, olive oil and a touch of cream
                    </li>
                    <li>
                        <b>frutti di mare</b> 24.00<br>
                         fresh mussels, clams, calamari and sea scallops over linguine 
                         pasta in a garlic white wine sauce
                    </li>
                    <li>
                        <b>fettucinne alfredo</b> 14.00<br>
                        wide egg noodles in a rich cream sauce
                    </li>
                    <li>
                        <b>spaghetti con polpettine</b> 15.50<br>
                         spaghetti pasta with choice of marinara or bolognese 
                         sauce served with Mamma's homemade meatballs
                    </li>
                    <li>
                        <b>spaghetti carbonara</b> 16.00<br>
                         spaghetti pasta with prosciutto, egg, onions and peas in a rich cream sauce
                    </li>
                    <li>
                        <b>meat lasagna</b> 16.00<br>
                        baked with marinara or bolognese sauce
                    </li>
                    <li>
                        <b>penne caprese</b> 15.00<br>
                         tube pasta with fresh mozzarella, tomatoes and basil in marinara sauce
                    </li>
                    <li>
                        <b>penne al pomodoro secco</b> 16.50<br>
                        tube pasta in light gorgonzola cream sauce with portobello mushrooms, 
                        fresh and sun-dried tomatoes
                    </li>
                    <li>
                        <b>cheese tortellini</b> 14.00<br>
                         cheese-stuffed tortellini pasta in marinara or bolognese sauce
                    </li>
                    <li>
                        <b>cheese tortellini alla vodka</b> 16.50<br>
                         cheese-stuffed tortellini pasta with mushrooms and peas in vodka sauce
                    </li>
                    <li>
                        <b>stuffed shells</b> 14.00<br>
                         stuffed with ricotta cheese and spinach in marinara or bolognese sauce
                    </li>
                    <li>
                        <b>rotolo aurora</b> 16.50<br>
                        vegetarian rolled pasta with ricotta cheese and spinach in
                        tomato cream sauce
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="pollo" class="menu col-sm-11 ">
                <h2 class="center">Pollo</h2>
                <ul>
                    <li>
                        <b>pollo vesuvio</b> 18.00<br>
                         choice of half chicken or boneless breast with garlic, 
                         italian herbs and white wine served with roasted potatoes
                    </li>
                    <li>
                        <b>pollo alla anna</b> 18.00<br>
                        chicken breasts saut&eacute;ed with mushrooms in a rich cream sauce over fettuccine pasta
                    </li>
                    <li>
                        <b>pollo picatta</b> 18.00<br>
                        chicken breasts saut&eacute;ed with capers in a lemon white wine sauce<br>
                         (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>pollo parmigiana</b> 17.00<br>
                         lightly breaded chicken breasts baked with fresh mozzarella 
                         in marinara or aurora tomato cream sauce <br>
                         (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>pollo pesto</b> 18.00<br>
                         chicken breasts saut&eacute;ed with mushrooms in a light pesto cream 
                         sauce over spaghetti
                    </li>
                    <li>
                        <b>grilled chicken</b> 16.00<br>
                        fire-grilled chicken served with steamed broccoli
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="vitello" class="menu col-sm-11 ">
                <h2 class="center">Vitello</h2>
                <ul>
                    <li>
                        <b>veal scallopine</b> 23.00<br>
                        thinly sliced and saut&eacute;ed with mushrooms in a white wine sauce
                    </li>
                    <li>
                        <b>veal piccata</b> 23.00 <br>
                        thinly sliced and saut&eacute;ed with lemons, capers and white wine<br>
                         (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                    <li>
                        <b>veal parmigiana</b> 23.00<br>
                        lightly breaded and baked with fresh mozzarella cheese in a light marinara sauce<br>
                        (served with steamed broccoli or a side dish of pasta marinara)
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div id="dolci" class="menu col-sm-11 ">
                <h2 class="center">Dolci</h2>
                <ul>
                    <li>
                        <b>tiramis&ugrave;</b> 7.00<br>
                         our most famous dessert! - lady fingers dipped in espresso 
                         and layered with creamy mascarpone cheese and dusted with chocolate powder
                    </li>
                    <li>
                        <b>bomba al cioccolato</b> 7.00<br>
                         warm chocolate cake smothered with bittersweet chocolate sauce
                    </li>
                    <li>
                        <b>torta di pane</b> 6.00<br>
                        bread pudding smothered with warm caramel sauce
                    </li>
                    <li>
                        <b>mini cannoli</b> 6.00<br>
                         miniature cannoli filled with creamy ricotta cheese and chocolate chips
                    </li>
                    <li>
                        <b>amaretto cake</b> 7.00<br>
                        yellow cake with almond cream
                    </li>
                    <li>
                        <b>profiteroles</b> 7.00<br>
                         cream puffs filled with vanilla custard and smothered in 
                         bittersweet chocolate sauce
                    </li>
                </ul>
                <a class="center" href="#top">back to top</a>
            </div>
        </div> <!-- end .row -->
        <div class="row">
            <div class="menu col-sm-11 ">
                <br>
                <br>
                <span style="font-size:75%;"> Please note:  While we try to update our website as often 
                as necessary, the listed prices and menu options are subject to change 
                without prior notice.</span>
                <br>
                <br>
            </div>
        </div> <!-- end .row -->
    </div> <!-- end #right-menu -->
</div> <!-- end .row -->

<?php require_once './includes/footer.php'; ?>