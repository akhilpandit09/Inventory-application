@extends('../../app')

@section('content')
    <div class="bg-white px-12">
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

        <div class=" py-10">
            <div class="text-center ">
                <h1 class="text-2xl font-semibold  text-gray-800 capitalize lg:text-3xl">Our <span
                        class="text-blue-500">Executive Team</span></h1>

                <p class=" my-6 text-gray-500 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
                    alias, adipisci rem similique, at omnis eligendi optio eos harum.
                </p>
            </div>
            <div class="mt-5">
                <a href="{{ route('team.create') }}">
                    <button
                        class=" bg-slate-700 text-white p-3 rounded-md shadow-lg border-none px-8 text-xl font-bold hover:bg-slate-900">Add
                        Team Member</button></a>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
                @foreach ($teams as $team)
                    <div
                        class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-950 shadow-lg">
                        <div class="flex flex-col sm:-mx-4 sm:flex-row">
                            <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                                src="images/teamProfile/{{ $team->image }}" alt="team profile">

                            <div class="mt-4 sm:mx-4 sm:mt-0">
                                <h1
                                    class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">
                                    {{ $team->name }}</h1>

                                <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">{{ $team->designation }}
                                </p>
                            </div>
                        </div>

                        <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">{{ $team->description }}
                        </p>
                        <div class="mt-2">
                            <a href="{{ route('team.edit', $team->id) }}"><button
                                    class="btn btn-ghost btn-xs hover:text-white hover:bg-green-500 group-hover:text-gray-300">Edit</button></a>

                            <a href="{{ route('team.destroy', $team->id) }}"
                                onclick="return confirm('Are you sure you want to delete this product?')"><button
                                    class="btn btn-ghost btn-xs hover:text-white hover:bg-red-500 group-hover:text-gray-300">Delete</button></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endsection
