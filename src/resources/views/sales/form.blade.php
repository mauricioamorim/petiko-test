<div id="message-error">
</div>

<form class="needs-validation form"  id="checkout-form" role="form" method="POST" autocomplete="off" novalidate accept-charset="UTF-8" action="">
    <div class="row">
        <div class="col-md-3 d-none d-md-block">
            @include('sales.candidate')
        </div>
        <div class="col">
            <div class="card card-shipping p-2 mb-2 mb-md-3 bg-light">
                <h3>Dados de entrega</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Nome completo</label>
                            <input type="text" class="form-control" id="name" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" name="name" aria-describedby="name" placeholder="Ex. Mauricio de Amorim Alexandre da Silva" autocomplete="off" required autocapitalize="off" value="{{ $shopping->nome }}" required maxlength="35" minlength="4">
                            <div class="invalid-feedback">
                                Informe seu nome completo. Sem Numeros.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cep">CEP</label>
                            <input type="tel" class="form-control" id="cep"  name="cep" aria-describedby="name" placeholder="05303-000" autocomplete="off" required autocapitalize="off" value="">
                            <div class="invalid-feedback" id="cep-invalido">
                                Informe um CEP válido
                            </div>
                        </div>
                    </div>
                    <div class="col-8 col-md-9">
                        <div class="form-group">
                            <label for="logradouro">Logradouro</label><br>
                            <input type="text" class="form-control" id="logradouro"  name="logradouro" aria-describedby="name" placeholder="Ex. R. Carlos Weber" autocomplete="off" required autocapitalize="off" value="">
                            <div class="invalid-feedback">
                                Informe o logradouro (Rua, Av, Travessa..)
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="form-group">
                            <label for="numero">Nº</label><br>
                            <input type="tel" class="form-control" id="numero"  name="numero" aria-describedby="name" placeholder="1319" autocomplete="off" autocapitalize="off" value="" maxlength="5" minlength="1" required>
                            <div class="invalid-feedback">
                                Apenas números.
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            <label for="complemento">Compl</label><br>
                            <input type="text" class="form-control" id="complemento" pattern="^.{0,45}$"  name="complemento" aria-describedby="name" placeholder="Apt./casa" autocomplete="off" autocapitalize="off" value="">
                            <div class="invalid-feedback">
                                Complemento maior que o permitido <u style="font-size: 10px">(45)</u>, porfavor diminua o complemento.
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="bairro">Bairro</label><br>
                            <input type="text" class="form-control" id="bairro"  name="bairro" aria-describedby="name" placeholder="Ex. Vila Leopoldina" autocomplete="off" required autocapitalize="off" value="">
                            <div class="invalid-feedback">
                                Obrigatório
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="cidade">Cidade</label><br>
                            <input type="text" class="form-control" id="cidade"  name="cidade" aria-describedby="name" placeholder="Ex. São Paulo" autocomplete="off" required autocapitalize="off" value="">
                            <div class="invalid-feedback">
                                Obrigatório
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="estado">Estado</label><br>
                            <select class="form-control input-lg" id="estado" name="estado" required>
                                <option selected></option>
                                <option  value="AC">Acre</option>
                                <option  value="AL">Alagoas</option>
                                <option  value="AP">Amapá</option>
                                <option  value="AM">Amazonas</option>
                                <option  value="BA">Bahia</option>
                                <option  value="CE">Ceará</option>
                                <option  value="DF">Distrito Federal</option>
                                <option  value="ES">Espírito Santo</option>
                                <option  value="GO">Goiás</option>
                                <option  value="MA">Maranhão</option>
                                <option  value="MT">Mato Grosso</option>
                                <option  value="MS">Mato Grosso do Sul</option>
                                <option  value="MG">Minas Gerais</option>
                                <option  value="PA">Pará</option>
                                <option  value="PB">Paraíba</option>
                                <option  value="PR">Paraná</option>
                                <option  value="PE">Pernambuco</option>
                                <option  value="PI">Piauí</option>
                                <option  value="RJ">Rio de Janeiro</option>
                                <option  value="RN">Rio Grande do Norte</option>
                                <option  value="RS">Rio Grande do Sul</option>
                                <option  value="RO">Rondônia</option>
                                <option  value="RR">Roraima</option>
                                <option  value="SC">Santa Catarina</option>
                                <option  value="SP">São Paulo</option>
                                <option  value="SE">Sergipe</option>
                                <option  value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-3 mt-4">
                <div class="col-12">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success btn btn-block btn-checkout-submit" type="button">Concluir Compra <i class="fa fa-check"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
