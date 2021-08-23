@extends('layout')

@section('content')
<section>
    <div class="container">
        <h4 style="text-align: center;margin-top: 25px">Send Your Cv To Us</h4>
       <div class="container" style="margin-top: 50px;padding: 20px;box-shadow: 5px 5px 5px 5px #888888;border-radius: 30px 30px 30px 30px;">
          @if(count($errors) > 0)
              <div class="alert alert-danger">
                 <ul>
                     @foreach($error->all as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
              </div>
          @endif

           <form action="{{ route('send') }}" method="post"  enctype="multipart/form-data">
               {{ csrf_field() }}
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-success">
                       <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                   </div>
               @endif
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="email" style="font-size: 18px">Email address:</label>
                           <input type="email" name="email" class="form-control" id="email" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="phone" style="font-size: 18px">Phone:</label>
                           <input type="text" name="phone" class="form-control" id="phone" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="phone" style="font-size: 18px">Your Job Title:</label>
                           <input type="text" name="job_title" class="form-control" id="phone" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="cv" style="font-size: 18px">upload your cv:</label>
                           <input type="file" name="cv" class="form-control" id="cv" required>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-primary" style="margin: 15px;width: 150px;">Submit</button>
               </div>
           </form>
       </div>
    </div>
</section>
@endsection
