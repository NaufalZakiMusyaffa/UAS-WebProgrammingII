@extends('layouts.master')

@section('content')
 
 <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{ asset('/dist/img/uclube.png') }}" alt="User profile picture">
          </div>
          <h3 class="profile-username text-center">@Naufal Zaki Musyaffa</h3>

          <p class="text-muted text-center">Web Programming II</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
             <strong><i class="fas fa-map-marker-alt mr-3"></i> Lokasi</strong>
           <a class="pull-right"> Bandung</a>
            </li>
            <li class="list-group-item">
              <strong><i class="fas fa-pencil-alt mr-3"></i> Kelas</strong>
              <a class="pull-right"> TIF RM 18 CIDB </a>
            </li>
            <li class="list-group-item">
              <strong><i class="fas fa-pencil-alt mr-3"></i> Npm</strong>
              <a class="pull-right"> 19552011155 </a>
            </li>
            <li class="list-group-item">
              <strong><i class="fas fa-pencil-alt mr-3"></i> Asal Kampus</strong>
              <a class="pull-right"> Sekolah Tinggi Teknologi Bandung </a>
            </li>
            <li class="list-group-item">
              <strong><i class="fas fa-pencil-alt mr-3"></i> Contact</strong>
                      <a href="https://www.facebook.com/nouval.zaki.9" class="pull-right"><i class="fab fa-facebook-f text-blue col-xs-2"></i></a>
                      <a href="https://line.me/ti/p/JiiZx78dRp" class="pull-right"><i class="fab fa-line text-green col-xs-2"></i></a>
                      <a href="https://github.com/NaufalZakiMusyaffa" class="pull-right"><i class="fab fa-github text-grey col-xs-2"></i></a>
            </li>    
          </ul>
        </div>
  <!-- /.card-body --> 
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection