</section> <!-- end #main-content -->

<!-- Footer -->
<footer>
    <div class="row">
        <!-- Hours -->
        <div id="hours" class="col-sm-4">
            <ul>
                <li><b class="gray">Mon - Thurs</b>  4pm to 10pm</li>
                <li><b class="gray">Friday</b>  4pm to 11pm</li>
                <li><b class="gray">Saturday</b>  11am to 11pm</li>
                <li><b class="gray">Sunday</b>  11am to 10pm</li>
            </ul>
        </div>
        <!-- OpenTable Widget -->
        <div id="open-table-widget" class="col-sm-4">
            <a href="http://www.opentable.com/anna-maria-pasteria-reservations-chicago?rtype=ism&restref=69766" class="OT_ExtLink">
                <img src="./images/open-table-logo.png" alt="OpenTable logo"> 
                <br>
                <span id="reserve-text" class="white">Reserve a Table</span>
            </a>
        </div>
        <!-- Address/ Phone numbers -->
        <div id="address" class="col-sm-4">
            4400 N. Clark St. <br>
            Chicago, IL <br>
            <br>
            773-506-2662 or <br>
            773-506-2649
        </div>

        <div id="credits">
            <div class="col-sm-12">
                <p>&copy; 2016 Anna Maria Pasteria - For information regarding this website, contact the <a class="gray"href="mailto:cpicciolini@gmail.com">webmaster</a>.
            </div>
        </div>
    </div>
</footer>
</div> <!-- end .container-fluid -->

<script>
    $("document").ready(function($){
        
        // Fixed Top Navigation when scrolling
        var topNav = $('#header');
        $(window).scroll(function () {
           if ($(this).scrollTop() > 500) {
               topNav.addClass("fixed-nav");
           } else {
               topNav.removeClass("fixed-nav");
           }
        });

        // Make index.php header font white (overlays dark image)
        var pathname = window.location.pathname;
        if ( pathname == '/Pasteria/index.php' || pathname == '/Pasteria/') {
            $('#logo h1').addClass('white');
            $('#top-nav a').addClass('white');

        };

    }); // end ready
</script>
</body>
</html>

