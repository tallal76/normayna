<h1>Home</h1>

<body>
    <div class="container">


        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="./assets/imgslider/img1.jpg"></div>
                <div class="swiper-slide"><img src="./assets/imgslider/img2.jpg"></div>
                <div class="swiper-slide"><img src="./assets/imgslider/img3.jpg"></div>
             
            </div>
            <!--  pagination -->
            <div class="swiper-pagination"></div>

            <!--  navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


        </div>


    </div>



    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // autoplay to make pictures moves after 3 sec
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },



        });
    </script>
</body>