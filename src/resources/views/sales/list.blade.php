@include("sales.submenu")

@foreach ($all_sales as $sale)
    <div class="card mb-5">
        <div class="card-body">
            <h5 class="card-title pb-4">
                <strong class="text-info">Nome: </strong>{{ $sale->nome }}
                <span class="float-right"><strong class="text-info">id: </strong>{{ $sale->id }}</span>
            </h5>
            <div class="card-text pb-2">
                <strong class="text-info">Data: </strong> {{ date('d.m.Y', strtotime($sale->created_at)) }}
            </div>
            <div class="card-text pb-2">
                <div class="row">
                    <div class="col-4">
                        <strong class="text-info">CEP: </strong>{{ $sale->cep }}
                    </div>
                    <div class="col-4">
                        <strong class="text-info">Logradouro: </strong>{{ $sale->logradouro }}
                    </div>
                </div>
            </div>
            <div class="card-text pb-2">
                <div class="row">
                    <div class="col-4">
                        <strong class="text-info">Número: </strong>{{ $sale->numero }}
                    </div>
                    <div class="col-4">
                        <strong class="text-info">Complemento: </strong>{{ $sale->complemento }}
                    </div>
                </div>
            </div>
            <div class="card-text pb-2">
                <div class="row">
                    <div class="col-4">
                        <strong class="text-info">Bairro: </strong>{{ $sale->bairro }}
                    </div>
                    <div class="col-4">
                        <strong class="text-info">Cidade: </strong>{{ $sale->cidade }}
                    </div>
                    <div class="col-4">
                        <strong class="text-info"> Estado: </strong>{{ $sale->estado }}
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endforeach
