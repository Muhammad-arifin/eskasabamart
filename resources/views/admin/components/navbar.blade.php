<nav class="mb-3 d-flex justify-content-lg-between bg-white p-2 rounded">
    <div class="d-flex flex-column">
      <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item active"><a href="{{ $nama }}">Dashboard</a></li>
         {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
        </ol>
        <span>{{ $nama }}</span>
    </div>
    <div class="d-flex align-items-center gab-3">
      <div class="icon-notif">
          <span class="material-icons">notifications</span>
      </div>
       <img src="{{ asset('assets/images/th.jpg') }}" class="rounded-circle" style="width: 50px;" alt="">
    </div>
  </nav>
