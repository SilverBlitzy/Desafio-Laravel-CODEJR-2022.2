<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produtos') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('products.create')}}">
                <button type="button" class="btn btn-dark icone-add-table">
                    <b><i class="fas fa-plus-circle "></i> Adicionar</b>
                </button>
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Opções</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->name }}</th>
                            <td>R$ {{ number_format($product->price, 2) }}</</td>
                            <td>

                                <div class="btn-group">

                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <form class="form-delete d-inline-block" action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>

            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/5d99e3d3ae.js" crossorigin="anonymous"></script>

    </x-slot>
</x-app-layout>
