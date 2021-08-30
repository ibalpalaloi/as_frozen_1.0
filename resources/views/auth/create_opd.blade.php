<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=url('/')?>/public/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=url('/')?>/public/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Surat Menyurat&nbsp;</b>Elektronik</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Buat Akun OPD</p>

      <form action="<?=url('/')?>/pilih-opd" method="post">
        {{ csrf_field() }}
        <div class="form-group mb-3">
          <label>Nama OPD</label>
          <select class="form-control" name="opd">
            @foreach ($opd as $row)
            <option value="{{$row['id']}}">{{$row['nama_opd']}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group mb-3">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Masukan username">
        </div>
        <div class="form-group mb-3">
          <label>Password</label>
          <input type="text" class="form-control" name="password" placeholder="Masukan password">
        </div>

        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Pilih OPD</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=url('/')?>/public/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=url('/')?>/public/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=url('/')?>/public/AdminLTE/dist/js/adminlte.min.js"></script>

</body>
</html>
