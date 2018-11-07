
        <script>
            ClassicEditor
                .create( document.querySelector('textarea.ckedit-init'), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo' ],
                })
                .then( editor => {
                    console.log( editor );
                })
                .catch( error => {
                    console.error( error );
                });
        </script>

        <script src="/js/custom.js"></script>

        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '350974038685871',
                    xfbml      : true,
                    version    : 'v2.12'
                });
                FB.AppEvents.logPageView();
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            function checkLoginState() {
                FB.getLoginStatus(function(response) {

                    // statusChangeCallback(response);
                    FB.api('/me', 'GET', {"fields":"id,name,email"},
                        function(response) {
                            // Insert your code here
                            fbname=response.name;
                            fbemail=response.email;
                            fbID=response.id;

                            $("#hdnFbID").val(fbID);
                            $("#hdnName ").val(fbname);
                            $("#hdnEmail").val(fbemail);
                            $("#frmMain").submit();
                            console.log(response);
                        }
                    );
                });
            }
        </script>

        <script>
            var modal = document.getElementById('id01');

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <script>
            function openModal() {
                document.getElementById('myModal').style.display = "block";
            }

            function closeModal() {
                document.getElementById('myModal').style.display = "none";
            }

            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>

        <script>
            toastr.options.progressBar = true;
            toastr.options.positionClass = "toast-bottom-full-width";

            @if (Session::has('flash_toastr'))
                toastr.{{ Session::get('flash_toastr')['type'] }}("{{ Session::get('flash_toastr')['message'] }}");
            @endif
        </script>

        <script>

        </script>
    </body>
</html>
