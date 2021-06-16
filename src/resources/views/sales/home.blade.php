<h1 class="pt-4 pb-3 text-info">Etapa 1: Desafio do projeto técnico</h1>
<div class="pl-4 text-justify">
    <p>
        Na Petiko lidamos diariamente com milhares de clientes espalhados por todo o Brasil. Nosso objetivo é entregar sempre a melhor experiência para esse assinante, seja com nossos produtos, serviços, e até mesmo na tranquilidade que suas compras chegarão em sua casa no momento correto, da forma mais ágil e eficiente possível.
    </p>
    <p>
        Nesse desafio você usará um pouco de sua habilidade Full Stack. Queremos que você construa uma aplicação usando dados abertos da API de consulta de CEPs VIACEP.
    </p>
    <p>
        O objetivo é criar uma aplicação que simule um formulário de pedido com nome do cliente e endereço. Com base no CEP digitado pelo cliente localize e autocomplete o endereço utilizando os dados disponibilizados pela API VIACEP. Ao clicar no botão salvar enviar esses dados para sua aplicação criar e salvar um pedido fictício para esse cliente com entrega neste endereço.
    </p>
</div>

<h3 class="pt-4 text-info">Exigências:</h3>
<ol>
    <li>
        Criar um backend para coletar esses dados via API json e disponibilize-os para o front.
    </li>
    <li>
        Valide os campos autopreenchidos com a busca, não permitindo que o cliente submeta as informações com campos não preenchidos.
    </li>
    <li>
        Garantir que o endereço preenchido pelo cliente no frontend esteja realmente igual ao endereço fornecido para aquele CEP no backend.
    </li>
    <li>
        Usar Laravel no Backend
    </li>
    <li>
        Usar Bootstrap no frontend
    </li>
</ol>

<h3 class="pt-4 text-info">Extras:</h3>
<p class="pl-4 text-justify">
    - Usar outra fonte de consulta de endereço POSTMON, para casos de instabilidade, ou o endereço não for encontrado.
</p>

<h3 class="pt-4 text-info">Entregáveis esperados:</h3>
<p class="pl-4 text-justify">
    Responder esse e-mail para rh@petiko.com.br e vinicius@petiko.com.br , enviando o link do projeto no github/gitlab/bitbucket com a aplicação finalizada
</p>

<h3 class="pt-4 text-info">Prazo:</h3>
<p class="pl-4 text-justify">
    Até às 23:00 horas de 16/06/2021.
</p>

<div class="text-center py-5">
    <a href="{{ route('sales.create') }}"> <button class="btn btn-info rounded-pill btn-lg mr-3">Finalizar Pedido</button></a>
    <a href="{{ route('sales.list') }}"><button class="btn btn-warning rounded-pill btn-lg mr-3">Listar Pedidos</button></a>
</div>
