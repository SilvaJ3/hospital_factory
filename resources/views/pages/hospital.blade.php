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
                                        <span>Consultation</span>
                                    </div>
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
                                    @foreach ($collection_data as $consultation)
                                        <div class="flex justify-between border text-sm font-normal mt-4">
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->id}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->schedule_time}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->doctor}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->local}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <a href="/patients/{{$consultation->patient_id}}">{{$consultation->patient_fname}} {{$consultation->patient_lname}}</a>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->status}}</span>
                                            </div>
                                            <div class="px-2 flex justify-start">
                                                <span>{{$consultation->diagnostic}}</span>
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
