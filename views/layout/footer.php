</main>
<footer class="footer">Aleksander Kaplan - <a href="mailto:aleksander_kaplan@yahoo.de">aleksander_kaplan@yahoo.de</a></footer>




<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function(){
        $("#myInput1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".dropdown-menu1 li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function(){
        $("#myInput2").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".dropdown-menu2 li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).ready(function(){
        $("#myInput3").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".dropdown-menu3 li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</body>
</html>