@extends("layouts.index")

@section('content')
    <div class="bg-gray-500 flex justify-center py-10 w-screen">
        <!-- component -->
        <div class="bg-gray-50 min-h-full w-full">
            <div class="p-4">
                <div class="bg-white p-4 rounded-md">
                    <div>
                        <h2 class="mb-4 text-xl font-bold text-gray-700">Hospital : {{$hospital->name}} - Consultation</h2>
                        <div>
                            <div>
                                <div
                                    class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                                    <div>
                                        <span>Date</span>
                                    </div>
                                    <div>
                                        <span>Doctor</span>
                                    </div>
                                    <div>
                                        <span>Local</span>
                                    </div>
                                    <div>
                                        <span>Patient</span>
                                    </div>
                                    <div>
                                        <span>status</span>
                                    </div>
                                    <div>
                                        <span>diagnosticated ?</span>
                                    </div>
                                </div>
                                <div>
                                    @foreach ($consultations_filter as $consultation)
                                        <div class="flex justify-between border text-sm font-normal mt-4">
                                            <div class="px-2 flex justify-start">
                                                <a href="">{{$consultation->schedule_time}}</a>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->doctors()->first()->name}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->local()->first()->name}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->patients()->first()->fname}} {{$consultation->patients()->first()->lname}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->status()->first()->status}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                @if ($consultation->register()->first())
                                                  <span>{{$consultation->register()->first()->status()->first()->status}}</span>
                                                @else
                                                  <span>null</span>
                                                @endif
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
@endsection
