@extends('../../app')

@section('content')
    <div class="mt-4">
        <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
            @csrf
            <label class="block mb-4">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Member Profile
                </span>
                <input type="file" name="image" value="{{ old('image') }}"
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Enter your product Image" />
                @if ($errors->has('image'))
                    <span class="text-red-600">{{ $errors->first('image') }}</span>
                @endif
            </label>

            <label class="block mb-4">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Name
                </span>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Enter Member Name" />
                @if ($errors->has('name'))
                    <span class="text-red-600">{{ $errors->first('name') }}</span>
                @endif
            </label>

            <label class="block mb-4">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Designation
                </span>
                <input type="text" name="designation" value="{{ old('designation') }}"
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Enter Member Designation" />
                @if ($errors->has('designation'))
                    <span class="text-red-600">{{ $errors->first('designation') }}</span>
                @endif
            </label>



            <label class="block mb-4">
                <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                    Description
                </span>
                <textarea type="text" value='{{ old('description') }}' name="description"
                    class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                    placeholder="Enter member description"></textarea>
                @if ($errors->has('description'))
                    <span class="text-red-600">{{ $errors->first('description') }}</span>
                @endif
            </label>

            <button
                class=" bg-slate-800  text-white p-2 rounded-md shadow-lg border-none px-8 text-xl font-semibold hover:bg-slate-900"
                type="submit">Submit</button>
        </form>
    </div>
@endsection
