<x-layout titlePage="Form Input">
    <form class="row g-3 mx-5 mt-xl-3 border border-2 shadow-sm px-2 " method="POST"
        action="{{ route('form_page.store') }}" enctype="multipart/form-data"
        style="border-radius: 10px; height: 30rem; overflow-y: scroll">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Michael Alexander"
                value="{{ old('name') }}">
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="alex@gmail.com"
                value="{{ old('email') }}">
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="address_home" class="form-label">Address Home</label>
            <input type="text" class="form-control" id="address_home" name="address_home"
                placeholder="Jl. Keputih Tegal Timur Laut" value="{{ old('address_home') }}">
            @error('address_home')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <label for="address_kosan" class="form-label">Address Kosan</label>
            <input type="text" class="form-control" id="address_kosan" name="address_kosan"
                placeholder="Jl. Keputih Tegal Timur Selatan" value="{{ old('address_kosan') }}">
            @error('address_kosan')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="number" class="form-label">Number</label>
            <input type="number" class="form-control" id="number" name="number" value="{{ old('number') }}"
                step=".01">
            @error('number')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" class="form-control" id="image" name="image" onchange="loadFile(event)"
                value="{{ old('image') }}">
            @error('image')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <img class="mx-auto" style="width: 15rem; display: none" {{-- src="{{ asset('test.jpg') }}" --}} alt="" id="preview-image">
        <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
        </div>
    </form>

    @section('script')
        <script>
            var loadFile = function(event) {
                var reader = new FileReader();
                reader.onload = function() {
                    var output = document.getElementById('preview-image');
                    output.src = reader.result;
                    output.style.display = "block";
                };
                reader.readAsDataURL(event.target.files[0]);
            };
        </script>
    @endsection
</x-layout>
