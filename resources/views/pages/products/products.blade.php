@extends('../../app')

@section('content')
    <div class="container p-4">
        @if ($message = Session::get('success'))
            <div class="text-white bg-green-600 p-3 alert-msg">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('deleted'))
            <div class="text-white bg-red-600 p-3 alert-msg">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <script>
            setTimeout(function() {
                var elements = document.getElementsByClassName('alert-msg');
                for (var i = 0; i < elements.length; i++) {
                    elements[i].parentNode.removeChild(elements[i]);
                }
            }, 2000);
        </script>


        <div class="flex flex-column justify-between">
            <h3 class="text-4xl font-bold text-center mt-4 text-slate-700"> List of products </h3>
            <a href="{{ route('create.page') }}" class="mt-6">
                <button
                    class=" bg-slate-700 text-white p-3 rounded-md shadow-lg border-none px-8 text-xl font-bold hover:bg-slate-900">Add
                    Product</button>
            </a>
        </div>
        <div class="overflow-scroll max-h-[530px]">

            <table class=" rounded-lg mt-4 table-auto text-center min-w-full divide-y divide-gray-200" id="product-data">
                <!-- head -->
                <thead class="bg-gray-300 sticky top-0 text-lg font-bold text-blue-950 z-30">
                    <tr>
                        <th class="w-24">S.N</th>
                        <th class="w-32">Product Image</th>
                        <th class="w-40">Product Title</th>
                        <th class="">Description</th>
                        <th class="w-24">Price</th>
                        <th class="w-32">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <div class="avatar">
                                    <div class="mask  w-14 h-18 ">
                                        <img src="images/upload/{{ $product->image }}" alt="product imaget" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="font-bold">{{ $product->name }}</div>
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td><span class="text-green-600 font-bold">Rs</span> {{ $product->price }}</td>
                            <th>
                                <a href="{{ route('products.edit', $product->id) }}"><button
                                        class="btn btn-ghost btn-xs hover:text-white hover:bg-green-500">Edit</button></a>
                                <a href="{{ route('products.destroy', $product->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this product?')"><button
                                        class="btn btn-ghost btn-xs hover:text-white hover:bg-red-500">Delete</button></a>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
