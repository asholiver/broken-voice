<footer>
    <div class="c-section">
        <div class="l-container">
            <ul class="l-grid l-grid--align-middle l-grid--align-center">
                <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">
                    <a class="c-social" href="http://www.facebook.com/">
                        <svg class="c-social__icon">
                        <use xlink:href="#facebook"></use>
                        </svg>
                    </a>
                </li>

                <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">
                    <a class="c-social" href="http://www.twitter.com/davidajberner">
                        <svg class="c-social__icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                <li class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone">
                    <a class="c-social" href="mailto:#">
                        <svg class="c-social__icon">
                            <use xlink:href="#email"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <!-- .l-container -->
    </div>
    <!-- .c-section -->

    <div class="c-copyright">

        <p>&copy; 2016 - David AJ Berner</p>

    </div>

</footer>


<script>
    function toggleClass(event){
        event.preventDefault();
        event.target.classList.add('is-active');
        console.log('clicked')
    }

    var social = document.getElementsByClassName('c-social__icon');
    for (var i = 0; i < social.length; i++) {
        social[i].addEventListener('click', toggleClass)
    }
</script>

</body>

</html>