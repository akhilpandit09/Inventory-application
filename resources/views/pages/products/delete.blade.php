@extends('../../app')

@section('content')
    <div class="container p-4">
        <div class="">
            <h3 class="text-4xl font-bold text-start mt-4 text-slate-700"> Edit {{ $product->name }} product</h3>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route('products.destroy', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <label class="block mb-4">
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
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
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Product Description
                    </span>
                    <textarea type="text" value='{{ old('description', $product->description) }}' name="description"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter product description"></textarea>
                    @if ($errors->has('description'))
                        <span class="text-red-600">{{ $errors->first('description') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
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
                    <span
                        class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Product Image
                    </span>
                    <input type="file" name="image" value="{{ old('image', $product->image) }}"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter your product Image" />
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
