@extends('pelanggan.layout.index')

@section('content')
   <div class="row mt-4 align-items-center">
     <div class="col-md-6">
        <div class="content-text">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit consequatur reprehenderit reiciendis non totam dicta, vitae similique culpa eveniet, labore quos iste veritatis. Ut fugiat quas explicabo iusto dolorum perferendis inventore consectetur nostrum facilis, nihil maiores? Illo quasi, laudantium dolorem fuga assumenda illum tempore. Dignissimos, debitis suscipit consectetur ea ipsum doloremque provident quis error beatae recusandae numquam est non quasi aliquam deleniti accusantium ullam quaerat cupiditate odit! Maxime voluptates accusamus a dolores, mollitia officia at temporibus magni quis voluptatibus? Animi itaque reiciendis adipisci consectetur ipsum? Amet eos nam facere, commodi aliquid perspiciatis! Assumenda minus cupiditate, et error dolorem sunt quas commodi ipsum nobis ea tenetur libero est aut ipsam ipsa ut praesentium necessitatibus quibusdam qui reiciendis tempore odio veniam fugit?
        </div>
     </div>
     <div class="col md-5">
        <img src="{{ asset('assets/images/gambar.png') }}" style=" width:100% " alt="">
     </div>
   </div>
   <div class="d-flex justify-content-lg-between mt-5">
   <div class="d-flex align-items-center gap-4 " style="border-right: solid grey; ">
    <i class="fa fa-users fa-2x"></i>
    <p class="M-0 fs-5"> + 300 Pelanggan</p>
   </div>
   <div class="d-flex align-items-center gap-4 border-primary">
    <i class="fas fa-home fa-2x"></i>
    <p class="M-0 fs-5"> + 300 Seller</p>
   </div>
     <div class="d-flex align-items-center gap-4 border-primary">
        <i class="fas fa-shirt fa-2x"></i>
        <p class="M-0 fs-5"> + 300 Product</p>
     </div>

   </div>
   <h4 class="text-center mt-md-5 mb-5">Hubungi Kami</h4>
   <hr class="mb-5">
   <div class="row mb-md-5">
    <div class="col-md-5">
        <div class="bg-secondary" style="width: 90%; height:48vh; border-radius:10px;"></div>
    </div>
    <div class="col-md-7">
       <div class="card">
        <div class="card-header text-center">
            <h4>Kritik Dan Saran</h4>
        </div>
        <div class="card-body">
            <p class="p-0 mb-5 text-lg-center">Masukkan kritik saran anda kepada aplikasinkaminini agar kami dapat memberikan apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.</p>
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="staticEmail" value="" placeholder="Masukan Email Anda">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="Pesan" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Pesan" placeholder="Masukkan Pesan Anda">
                </div>
              </div>
              <button class="btn btn-primary mt-4 w-100">Kirim Pesan Anda</button>
        </div>
       </div>
    </div>
   </div>
@endsection
