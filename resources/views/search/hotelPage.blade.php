  <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  @include('header.header')



</head>
<body class="has-background-white" style="height:100vh;">

  <div class="container">
    @include('navbar.navbar')
  </div>
  <!-- Navbar End -->
  <br>
  <div class="container">

    <div class="level">

      <div class="level-left">
        <nav class="breadcrumb has-background-white" aria-label="breadcrumbs">
          <ul>
            <li><a class="noDeco color-four" href="#">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Search</a></li>
            <li class="is-active">
              <a href="#" aria-current="page">
                @foreach($price as $val)
                {{$val->hotel->hotelName}}
                @endforeach
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="level-right">
        <div class="field has-addons">
          <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Place or Hotel Name">
            <span class="icon is-small is-left">
              <i class="fas fa-map-marker-alt"></i>
            </span>
          </div>
          <div class="control">
            <a class="button bg-four text-white">
              Search
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- End  breadcrumbs-->
    <hr>
    <a href="{{url('search')}}" class="button noDeco bg-vue"><i class="color-four fas fa-chevron-left"></i>&nbsp; Back</a>
    <br>
    {{$price}}

    @include('scripts.script')

  </body>
  </html>
