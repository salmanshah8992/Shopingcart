
@extends('layout.app')
@yield('title','about')

<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.size{
    height: 200px;
    width: 150px;
}

</style>

@section('content')

<br>



<div class="container m-5 p-5">
  <img  class="size" src="https://scontent.fdac23-1.fna.fbcdn.net/v/t1.6435-1/p200x200/234779783_1649253645266003_4711245576193304043_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=7206a8&_nc_ohc=sC_RDfHfMecAX8OV2ZT&_nc_oc=AQk4_PWJCwVk54LLyswLM59_vKOKXveJepslB9eMp92ISv9S3H6FbOPhezxzE1iVvx4&_nc_ht=scontent.fdac23-1.fna&oh=a5f4566c87b65c04f1b62fc18045fada&oe=619798C2" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, fuga ex vitae mollitia ad officia. Odit, in vero. Voluptate cum consequatur enim hic aspernatur ab, nam magni distinctio placeat sunt.


    </div>
  </div>
</div>

@endsection