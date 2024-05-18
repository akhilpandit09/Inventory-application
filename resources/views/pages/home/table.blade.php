<section class="">
    <div class="container p-4">

        <div class="text-start">
            <h3 class="text-2xl font-bold mt-4 text-slate-700"> List of products </h3>
        </div>
        <div class="overflow-y-auto max-h-[530px]">

            <table class=" rounded-lg mt-4 table-auto text-center min-w-full divide-y divide-gray-200" id="product-data">
                <!-- head -->
                <thead class="bg-gray-300 sticky top-0 z-40 text-lg font-bold text-blue-950">
                    <tr>
                        <th class="w-24">S.N</th>
                        <th class="w-32">Product Image</th>
                        <th class="w-40">Product Title</th>
                        <th class="">Description</th>
                        <th class="w-24">Price</th>
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
