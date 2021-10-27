
@section('title','Menu')
<style>
 


.topnav a:hover {
  background-color: rgb(67, 170, 165);
  color: black;



  
}

</style>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark  fixed-top">
    <div class="container topnav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/addproduct">Add Product</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="/cart"><i class="fas fa-cart-plus">Add Cart </i></a>
      </li>
      </ul>
    </div>
  </nav>
  