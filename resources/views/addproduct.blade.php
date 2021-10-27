@extends('layout.app')
@section('content')
<section style="padding-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                      
                    </div>
                    <div class="card-body">
                      @if (Session::has('post_created'))
                      <div class="alert alert-success" role="alert">
                          {{ Session::get('post_created') }}

                      </div>
                          
                      @endif

                      
                    <form method="Post" action={{ route('post.product') }}>
                        @csrf
                        <div class="form-group">
                            <label for="name">Product name</label>
                            <input type="text" name="name" class="form-control" placeholder="enter name">
                        </div>

                        <div class="form-group">
                            <label for="description">Product Description</label>
                            <textarea name="description" class="form-control"  rows="3"></textarea>


                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image </label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>

                        <div class="form-group">
                            <label for="image">Or Image Link </label>
                            <input type="text" name="image" class="form-control" placeholder="image">
                        </div>

                        <div class="form-group">
                            <label for="price">Product Price</label>
                            <input type="text" name="price" class="form-control" placeholder="price">
                        </div>

                        

                        <button type="submit" class="btn btn-primary">Add Product</button>

                    </form>

                    </div>

                </div>

            </div>


        </div>
        </div>  
</section>

    
@endsection


