<!DOCTYPE html>
<html>
<head>
    <title>Ajax Request example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
  
    <div class="container">
        <h1>Ajax Request</h1>
  
        <form >
  
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
            </div>
            
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>  

            <div class="form-group">
                <label for="">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="" selected>select category</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                    @endforeach
                </select>
            </div>    
            
            <div class="form-group">
                <label for="">Posts</label>
                <select name="post" id="post" class="form-control">
                    <option selected>select post</option>
                </select>
            </div>
   
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
  
        </form>
    </div>
  
</body>
<script type="text/javascript">


    // select field onchange request

    $('#category').on('change',function(){

       var cat_id = $(this).val();

        $.ajax({
           type:'GET',
           url:"{{ route('ajaxrequest.fetch') }}",
           data:{
                id:cat_id,                 
            },
           success:function(response){

            var options = '';

            jQuery.each(response, function(index, item) {                                
                options += '<option value="'+item.id+'">'+item.title+'</option>';
            });

            $('#post').empty().append(options);
             
           }
        });
    
    
    
    
    
    });


   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $(".btn-submit").click(function(e){
  
        e.preventDefault();
   
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();
   
        $.ajax({
           type:'POST',
           url:"{{ route('ajaxrequest.store') }}",
           data:{name:name, password:password, email:email},
           success:function(data){
              
           }
        });

      
  
    });
</script>
   
</html>