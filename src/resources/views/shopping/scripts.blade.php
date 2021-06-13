<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<!-- JQUERY MOBILE -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    var domains = ["yahoo.com" ,"hotmail.com" ,"gmail.com" ,"me.com" ,"aol.com" ,"mac.com" ,"live.com" ,"comcast.net" ,"googlemail.com" ,"msn.com" ,"hotmail.co.uk" ,"yahoo.co.uk" ,"facebook.com" ,"verizon.net" ,"sbcglobal.net" ,"att.net" ,"gmx.com" ,"outlook.com" ,"icloud.com","ig.com","ig.com.br", "hmj.com.br", "oabrs.org.br"];
    var topLevelDomains = ["com", "net", "org", 'com.br'];

    var suggestionMail="";

    $('#email').on('blur', function(event) {
        // console.log("event ", event);
        // console.log("this ", $(this));
        $(this).mailcheck({
            domains: domains,                       // optional
            topLevelDomains: topLevelDomains,       // optional
            suggested: function(element, suggestion) {
                // callback code
                // console.log("suggestion ", suggestion.full);
                $('#suggestion').html("Você quis dizer <b><i id=mailSugest>" + suggestion.full + "</b></i>?");
                suggestionMail = suggestion.full;

                $('#suggestion b').click(function() {
                    $('#email').val(suggestionMail);
                    $('#suggestion').html("");
                    suggestionMail = '';
                });
            },
            empty: function(element) {
                // callback code
                // $('#suggestion').html('No Suggestions :(');
                $('#suggestion').html("");
                suggestionMail = '';
            }
        });
    });
</script>
<script type="text/javascript">
    //FORÇA A VALIDAÇÃO DE FORMS QUANDO DEFINIDO A CLASSE needs-validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                if(suggestionMail !== ''){
                    event.preventDefault();
                    event.stopPropagation();
                    $('#email').addClass('is-invalid');
                }
                form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
</script>
