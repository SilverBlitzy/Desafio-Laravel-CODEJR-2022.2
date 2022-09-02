<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Produtos') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title title-form">Cadastrando Novo Produto</h3>
                        </div>
                        <div class="card-body">
                            <form id="form-adicionar" action="/produtos/store" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="name" class="required">Nome </label>
                                        <input required type="text" name="name" id="name" autofocus class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="flavor" class="required">Sabor </label>
                                        <input required type="text" name="flavor" id="flavor" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="price" class="required">Preço </label>
                                        <input required required step="0.50" type="number" name="price" id="price" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="image">Imagem </label>
                                        <input required type="file" class="form-control-file" id="image" name="image">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="description">Descrição </label>
                                        <textarea required class="form-control" id="description" name="description" rows="3"></textarea>
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
