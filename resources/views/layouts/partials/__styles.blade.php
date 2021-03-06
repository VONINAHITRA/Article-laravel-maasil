  <head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog Article </title>
    <link rel="shortcut icon" type="image/x-icon" href="tonimageici.jpg" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 4.3 -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">
    <!-- animation text -->
    <link rel="stylesheet" href="{{ asset('/css/blog.css') }}">

 </head>

 <style>

body{margin-top:20px;}
/* Style animation texte */
.ml3 {
  font-weight: 900;
  font-size: 3.5em;
}
.active{
  color:red;
}
.section {
    padding: 100px 0;
    position: relative;
}

/* Blog 
---------------------*/
.blog-grid {
  margin-top: 15px;
  margin-bottom: 15px;

}
.blog-grid .blog-img {
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}
.blog-grid .blog-img .date {
  position: absolute;
  color: #ffffff;
  padding: 8px 15px;
  left: 0;
  top: 10px;
  font-size: 14px;
}
.blog-grid .blog-info {
  box-shadow: 0 0 10px rgba(150,54,148, 1);
  border-radius: 5px;
  background: #fff;
  padding: 20px;
  margin: -30px 20px 0;
  position: relative;
  max-width: 95%;
  min-width:95%;
  max-height:25%;
  min-height:25%;
}

.blog-grid .blog-form {
  box-shadow: 0 0 10px rgba(150,54,148, 1);
  border-radius: 5px;
  background: #fff;
  padding: 20px;
  margin: -30px 20px 0;
  position: relative;
}
.blog-grid .blog-info h5 {
  font-size: 22px;
  font-weight: 500;
  margin: 0 0 10px;
}
.blog-grid .blog-info h3 {
  font-size: 22px;
  font-weight: 500;
  margin: 0 0 10px;
  text-align:center;
}
.blog-grid .blog-info h5 a {
  color: #4682b4;
}
.blog-grid .blog-info p {
  margin: 0;
}
.blog-grid .blog-info .btn-bar {
  margin-top: 20px;
}

.px-btn-arrow {
    padding: 0 50px 0 0;
    line-height: 20px;
    position: relative;
    display: inline-block;
    color: #fe4f6c;
    -moz-transition: ease all 0.3s;
    -o-transition: ease all 0.3s;
    -webkit-transition: ease all 0.3s;
    transition: ease all 0.3s;
}


.px-btn-arrow .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
    -moz-transition: ease right 0.3s;
    -o-transition: ease right 0.3s;
    -webkit-transition: ease right 0.3s;
    transition: ease right 0.3s;
}

.px-btn-arrow .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
 