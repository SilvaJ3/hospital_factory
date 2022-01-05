@extends("layouts.index")

@section('content')
    <div class="bg-gray-500 flex justify-center py-10">
        <!-- component -->
        <div class="bg-gray-50 min-h-full w-screen">
            <div>
                <div class="p-4">
                    <div class="bg-white p-4 rounded-md">
                        <div>
                            <h2 class="mb-4 text-xl font-bold text-gray-700">Hospitals</h2>
                            <div>
                                <div>
                                    <div
                                        class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                                        <div>
                                            <span>Name</span>
                                        </div>
                                        <div>
                                            <span>Address</span>
                                        </div>
                                    </div>
                                    <div>
                                        @foreach ($hospitals as $hospital)
                                            <div class="flex justify-between border-t text-sm font-normal mt-4 space-x-4">
                                                <div class="px-2 flex">
                                                    <a href="/hospital/{{$hospital->id}}">{{$hospital->name}}</a>
                                                </div>
                                                <div>
                                                    <span>{{$hospital->adress}}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
