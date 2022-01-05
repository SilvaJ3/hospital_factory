@extends("layouts.index")

@section('content')
    <div class="bg-gray-500 flex justify-center py-10 w-screen">
        <!-- component -->
        <div class="bg-gray-50 min-h-full w-full">
            <div class="p-4">
                <div class="bg-white p-4 rounded-md">
                    <div>
                        <h2 class="mb-4 text-xl font-bold text-gray-700">Patient : {{$patient->fname}} {{$patient->lname}}</h2>
                        <div>
                            <div>
                                <div
                                    class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                                    <div>
                                        <a href="/patients/{{$patient->register_id}}">Register Id</a>
                                    </div>
                                    <div>
                                        <span>Name</span>
                                    </div>
                                    <div>
                                        <span>birth date</span>
                                    </div>
                                    <div>
                                        <span>gender</span>
                                    </div>
                                    <div>
                                        <span>address</span>
                                    </div>
                                    <div>
                                        <span>country</span>
                                    </div>
                                    <div>
                                        <span>city</span>
                                    </div>
                                    <div>
                                        <span>postcode</span>
                                    </div>
                                    <div>
                                        <span>phone</span>
                                    </div>
                                </div>
                                <div>
                                  <div class="flex justify-between border text-sm font-normal mt-4">
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->register_id}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->fname}} {{$patient->lname}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                      <span>{{$patient->birth_date}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->gender}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->adress}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->country}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->city}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->postcode}}</span>
                                    </div>
                                    <div class="px-2 flex justify-start">
                                        <span>{{$patient->phone}}</span>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="my-4 text-xl font-bold text-gray-700">Dossier médical : {{$patient->fname}} {{$patient->lname}}</h2>
                        <div>
                            <div>
                                <div
                                    class="flex justify-between bg-gradient-to-tr from-indigo-600 to-purple-600 rounded-md py-2 px-4 text-white font-bold text-md">
                                    <div>
                                        <span>Disease</span>
                                    </div>
                                    <div>
                                        <span>Status</span>
                                    </div>
                                    <div>
                                        <span>Consultation</span>
                                    </div>
                                </div>
                                <div>
                                  @foreach ($medicals as $medical)
                                    <div class="flex justify-between border text-sm font-normal mt-4">
                                      <div class="px-2 flex justify-start">
                                          <span>{{$medical->diseases()->first()->name}}</span>
                                      </div>
                                      <div class="px-2 flex justify-start">
                                          <span>{{$medical->status()->first()->status}}</span>
                                      </div>
                                      <div class="px-2 flex justify-start">
                                          <span>{{$medical->consultation_id}}</span>
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

