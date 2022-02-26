<x-layout titlePage="Landing Page">
    <div class="title-container text-center px-2 py-4 border border-2 shadow-sm"
        style=" background-color: #312F36; color: white">
        <h1 style="font-size: 2rem">Tugas PBKK 1</h1>
        <h2 style="font-size: 1.5rem">Nama : Erki Kadhafi Rosyid</h2>
        <h2 style="font-size: 1.5rem">NRP : 05111940000050</h2>
    </div>
    <div style="width: 90%; margin: 1.5rem 0 0; overflow-y: scroll;">
        <div class="accordion" id="accordionExample">
            {{-- {{ dd($data) }} --}}
            @foreach ($data as $item)
                <div class="accordion-item" style="height: 100%">
                    <h2 class="accordion-header" id="heading-{{ $item->id }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true"
                            aria-controls="collapse-{{ $item->id }}">
                            {{ $item->name }}
                        </button>
                    </h2>
                    <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse "
                        aria-labelledby="heading-{{ $item->id }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-3 d-flex justify-content-between">
                                            <p>Name</p>
                                            <span>:</span>
                                        </div>
                                        <div class="col-9">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 d-flex justify-content-between">
                                            <p>Email</p>
                                            <span>:</span>
                                        </div>
                                        <div class="col-9">
                                            <p>{{ $item->email }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 d-flex justify-content-between">
                                            <p>Address Home</p>
                                            <span>:</span>
                                        </div>
                                        <div class="col-9">
                                            <p style="text-align: justify">{{ $item->address_home }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 d-flex justify-content-between">
                                            <p>Address Kosan</p>
                                            <span>:</span>
                                        </div>
                                        <div class="col-9">
                                            <p style="text-align: justify">{{ $item->address_kosan }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 d-flex justify-content-between">
                                            <p>Number</p>
                                            <span>:</span>
                                        </div>
                                        <div class="col-9">
                                            <p style="text-align: justify">{{ $item->number }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-flex justify-content-center " style="">
                                    <img src='{{ asset("/storage/{$item->image}") }}' alt="" class="d-block "
                                        style="height: 10rem; margin-right: 0.2rem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    @section('script')
        <script>
            var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('preview-image');
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            };
        </script>
    @endsection
</x-layout>
