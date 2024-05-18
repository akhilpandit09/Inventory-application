@extends('../../app')

@section('content')
    <div class="container p-4">
        @if ($message = Session::get('success'))
            <div class="text-white bg-green-600 p-3">
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <div class="">
            <h3 class="text-4xl font-bold text-start mt-4 text-slate-700"> Edit {{ $team->name }} detail</h3>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Name
                    </span>
                    <input type="text" name="name" value="{{ old('name', $team->name) }}"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter member name" />
                    @if ($errors->has('name'))
                        <span class="text-red-600">{{ $errors->first('name') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Designation
                    </span>
                    <input type="text" name="designation" value="{{ old('designation', $team->designation) }}"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter member designation" />
                    @if ($errors->has('designation'))
                        <span class="text-red-600">{{ $errors->first('designation') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Description
                    </span>
                    <textarea type="text" name="description"
                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                        placeholder="Enter product description">{{ old('description', $team->description) }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-red-600">{{ $errors->first('description') }}</span>
                    @endif
                </label>

                <label class="block mb-4">
                    <span class=" block text-sm font-medium text-slate-700">
                        Member Profile
                    </span>
                    <div class="mt-1 flex items-center">

                        @if ($team->image)
                            <img src="{{ asset('images/teamProfile/' . $team->image) }}" class="mr-2 h-12 w-12 rounded-full"
                                alt="Team Profile">
                        @else
                            <span
                                class="mr-2 h-12 w-12 rounded-full bg-gray-200 text-gray-400 flex items-center justify-center">
                                No Image
                            </span>
                        @endif

                        <input type="file" name="image"
                            class="px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Upload a new profile">
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
