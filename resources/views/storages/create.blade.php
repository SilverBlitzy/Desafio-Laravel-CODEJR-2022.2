<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Estoques') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title title-form">Cadastrando Novo Estoque</h3>
                        </div>
                        <div class="card-body">
                            <form id="form-adicionar" action="/estoques/store" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="product_id" class="required">Produto </label>
                                        <select name="product_id" id="product_id" autofocus class="form-control form-select form-select-sm" value="{{ old('product_id', $storage->product->id ?? null) }}">
                                        <option value="" hidden>Selecione um Produto</option>
                                        @foreach ( $products as $product )
                                           <option value={{ $product->id }}>{{ $product->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="quantity" class="required">Quantidade </label>
                                        <input required required step="1" type="number" name="price" id="price" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="date" class="required">Data </label>
                                        <input required type="date" name="date" id="date" class="form-control">
                                    </div>
                                </div>

                                @csrf

                            </form>
                        </div>
                        <div class="card-footer">
                        <button type="submit" form="form-adicionar" class="btn btn-dark float-right">Cadastrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
