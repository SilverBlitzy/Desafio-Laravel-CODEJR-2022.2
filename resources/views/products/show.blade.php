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
                            <h3 class="card-title title-form">Mostrando dados do Produto</h3>
                        </div>
                        <div class="card-body">
                            <form id="form-adicionar" action="/produtos" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="name" class="required">Nome </label>
                                        <input disabled type="text" name="name" id="name" autofocus class="form-control" value={{ $product->name }}>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="flavor" class="required">Sabor </label>
                                        <input disabled type="text" name="flavor" id="flavor" class="form-control" value={{ $product->flavor }}>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="price" class="required">Preço </label>
                                        <input disabled step="0.50" type="number" name="price" id="price" class="form-control" value={{ $product->price }}>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="description">Descrição </label>
                                        <textarea  disabled class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="card-footer">
                        <button href="/produtos" form="form-adicionar" class="btn btn-dark float-right">Voltar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
