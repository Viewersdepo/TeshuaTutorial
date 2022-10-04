

<!-- FOOTER -->
<footer class="text-white" style="background:green;">
            <div class="container">
                <div class="row ">
                        <div class="col-md-4 ">
                            <a href ="home.php" class="text-dark text-decoration-none">Home</a>
                        </div>
                        <div class="col-md-4">
                            <a href ="about.php" class="text-dark text-decoration-none" >About</a>
                        </div>
                        <div class="col-md-4 ">
                            <a href ="contact.php" class="text-dark text-decoration-none">Contact</a>
                        </div>
                        <p class="lead text-center">Theme By | Uzydev | <span id="year"></span>&copy; ----All right Reserved.</p>
                   
                </div>
            </div>
        </footer>
        <div  style="height:10px; background:#f53f08;"></div>
        
        <!--Javascript and JQuery Only-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
            $('#year').text(new Date().getFullYear());
        </script>
            </body>
</html>