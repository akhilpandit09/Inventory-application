@extends('../../app')

@section('content')
    <div class="container p-4">
        @if ($message = Session::get('success'))
            <div class="text-white bg-green-600 p-3">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="">
            <h3 class="text-4xl font-bold text-start mt-4 text-slate-700"> Edit {{ $product->name }} product</h3>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Product Title
                    </span>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter your product title" />
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Product Description
                    </span>
                    <textarea type="text" name="description"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-red-600">{{ $errors->first('description') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Product Price
                    </span>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter your product Price" />
                    @if ($errors->has('price'))
                        <span class="text-red-600">{{ $errors->first('price') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Product Image
                    </span>
                    <div class="mt-1 flex items-center">

                        @if ($product->image)
                            <img src="{{ asset('images/upload/' . $product->image) }}" class="mr-2 h-12 w-12 rounded-full"
                                alt="Product Image">
                        @else
                            <span
                                class="mr-2 h-12 w-12 rounded-full bg-gray-200 text-gray-400 flex items-center justify-center">
                                No Image
                            </span>
                        @endif

                        <input type="file" name="image"
                            class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Upload a new image">
                    </div>
                    @if ($errors->has('image'))
                        <span class="text-red-600">{{ $errors->first('image') }}</span>
                    @endif
                </label>

                <button
                    class=" bg-slate-800  text-white p-2 rounded-md shadow-lg border-none px-8 text-xl font-semibold hover:bg-slate-900"
                    type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
