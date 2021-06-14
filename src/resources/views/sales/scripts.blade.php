<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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
                form.classList.add('was-validated');
            }, false);
        });
        }, false);
    })();
</script>

<script type="text/javascript">
        document.getElementById("cep").addEventListener('blur', function()
        {
            this.value = this.value.replace(/[^0-9]/g,'');
            const elemento = this;
            if (this.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                cssValidaInput(elemento, false);
                return;
            }

            let xhr = new XMLHttpRequest();
            xhr.open('GET', "https://api.postmon.com.br/v1/cep/"+this.value, true);
            xhr.onreadystatechange = function()
            {
                if (xhr.readyState == 4) {
                    populaCampos(JSON.parse(xhr.response));
                    cssValidaInput(elemento, true);
                    return;
                }
                cssValidaInput(elemento, false);
            }
            xhr.send();
        });

        function populaCampos(data)
        {
            console.log(data);
            document.getElementById("logradouro").value = data.logradouro;
            document.getElementById("cidade").value = data.cidade;
            document.getElementById("estado").value = data.estado;
            document.getElementById("bairro").value = data.bairro;
        }

        function cssValidaInput(elemento, valido)
        {
            if(valido){
                elemento.classList = 'form-control is-valid';
                elemento.parentNode.querySelectorAll(".invalid-feedback")[0].classList = 'invalid-feedback d-none';
                return;
            }

            elemento.classList = 'form-control is-invalid';
            elemento.parentNode.querySelectorAll(".invalid-feedback")[0].classList = 'invalid-feedback is-invalid d-block';

        }
</script>
