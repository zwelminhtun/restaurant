<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Mountain-Restaurant</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <link rel="icon" type="image/png" href="{{ asset('img/title-icon.png') }}">

         <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
         <link rel="stylesheet" type="text/css" href="{{asset('fontawesome-free/css/all.min.css')}}">
          
       
    </head>
    <body>
        <div class="container-fluid fixed-top pt-1 nav" >
            <nav class="navbar navbar-expand-lg navbar-light container py-0">
              <a class="navbar-brand" href="#"><img src="{{asset('img/logo1.png')}}" class="w-75"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                  <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/">Home </a>
                  <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/menu">Menu</a>
                   <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/blog">Blog</a>
                  <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/about">About us</a>
                  <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/contact">Contact us</a>
                  <a class="nav-link cartlink h6 font-weight-bold text-uppercase text-dark ml-3" href="#">
                   <i class="fa fa-shopping-cart fa-2x cart" aria-hidden="true"><span class="badge badge-danger item_count_text pt-1">0</span></i>
                  </a>
                  <a class="nav-item nav-link  h6 font-weight-bold text-uppercase text-dark ml-3" href="/login" ><i class="fas fa-user-tie fa-2x"></i></a>
                </div>
              </div>
            </nav>                                                                                    
        </div>
        <div>
            @yield('content')
        </div>
        <div class="container footer py-5">
            <div class="row">
                <div class="col-md-5 text-secondary">
                    <p class="text-dark h5 font-weight-bold">Contact Us</p>
                    <p><img src="{{asset('img/title-icon.png')}}"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet,  </p>
                    <p>Building-60, Room-8</p>
                    <p>Insein Road, Hlaing, Yangon</p>
                    <p>0123 456 789 - 0123 987 654</p>
                    <p>phulay952@gmail.com</p>
                </div>
                <div class="offset-1 col-md-3">
                    <p class="text-dark h5 font-weight-bold">Quick Links</p>
                    <p><img src="{{asset('img/title-icon.png')}}"></p>
                    <p><a href="/" class=" text-secondary">Home</a></p>
                    <p><a href="/about" class=" text-secondary">About Us</a></p>
                    <p><a href="/menu" class=" text-secondary">Menu</a></p>
                    <p><a href="/contact" class=" text-secondary">Contact</a></p>
                    <p><a href="/login" class=" text-secondary">Admin</a></p>

                </div>
                <div class="col-md-3 text-secondary">
                    <p class="text-dark h5 font-weight-bold">Opening Hours</p>
                    <p><img src="{{asset('img/title-icon.png')}}"></p>
                    <p class="text-dark">MON - FRI</p>
                    <p>8:00 AM - 20:00 PM</p>
                    <p class="text-dark">SAT - SUN</p>
                    <p>9:00 AM - 23:00 PM</p>
                </div>
               
            </div>
            
        </div>
        <div class="container-fluid copyright py-3 ">
              <p class="text-center">Copyright &copy; 2020. All Rights Reserved. Design by <a href="zinminhtun.me" class="text-success">zinminhtun.me</a> </p>
        </div>
         <div class="modal fade" id="yourcart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="name" placeholder="Enter Your Name" class="form-control mb-3 shadow">
                        </div>
                         <div class="col-md-6">
                          <input type="text" name="name" placeholder="Enter Email Address" class="form-control mb-3 shadow">
                        </div>
                         <div class="col-md-6">
                          <input type="text" name="name" placeholder="Enter Phone Number" class="form-control mb-3 shadow">
                        </div>
                         <div class="col-md-6">
                          <input type="text" name="name" placeholder="Enter Your Address" class="form-control mb-3 shadow">
                        </div>
                    </div>
                  </div>
                  
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Name.</th>
                        <th>Photo.</th>
                        <th>Price.</th>
                        <th>Unit.</th>
                        <th>Subtotal.</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody id="item_list">
                        
                    </tbody>
                  </table>
                  <div class="form-group">
                    
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  
                </div>
              </div>
            </div>
          </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

         <script type="text/javascript">
          $(window).on("scroll", function() {
              if($(window).scrollTop() > 150) {
                  $(".nav").addClass("active");
              } else {
                  //remove the background property so it comes transparent again (defined in your css)
                 $(".nav").removeClass("active");
              }
          });
      </script>
      <script type="text/javascript">
          $(document).ready(function(){
            count_item();


             $("#item_list").on('click','.btnplus',function(){
                console.log('Increase');
                var id=$(this).data('id');
                console.log(id);
                count_change(id,'+');
               })
               $("#item_list").on('click','.btnminus',function(){
                console.log('Decrease');
                var id=$(this).data('id');
                console.log(id);
                count_change(id,'-');
               })

               function count_change(id,action){
                  console.log(id,action);
                  var mycart=localStorage.getItem('mycart');
                  var mycartobj=JSON.parse(mycart);

                  if (action=='+') {
                    mycartobj.itemlist[id].qty++;
                  }else{
                    mycartobj.itemlist[id].qty--;
                    if(mycartobj.itemlist[id].qty<1){
                      mycartobj.itemlist.splice(id,1);
                    }
                  }
                  localStorage.setItem('mycart',JSON.stringify(mycartobj));
                  count_item();
                  showmodel();
               }


                $("#item_list").on('click','.btndelete',function(){
                     console.log('Deleted!');
                     var id=$(this).data('id');
                     console.log(id);
                     var ans=confirm('Are u sure');
                     if(ans){
                      var mycart=localStorage.getItem('mycart');
                      var mycartobj=JSON.parse(mycart);
                      mycartobj.itemlist.splice(id,1);
                      localStorage.setItem('mycart',JSON.stringify(mycartobj));
                      //$("#yourcart").modal.('hide');
                      count_item();
                      //$("#yourcart").modal('hide');
                      showmodel();
                     }

                 })




               $(".add_cart").click(function(){
              //console.log('Add');
              var id=$(this).data('id');
              var name=$(this).data('name');
              var price=$(this).data('price');
              var category=$(this).data('category');
              var item={id:id,name:name,price:price,category:category,qty:1};
              console.log(item);

              var mycart=localStorage.getItem('mycart');
              if(!mycart){
                mycart='{"itemlist":[]}';
              }
              var mycartobj=JSON.parse(mycart);
              var hasid=false;
              $.each(mycartobj.itemlist,function(i,v){
                if(v.id==id){
                  hasid=true;
                  v.qty++;
                }
              })
              if(!hasid){
              mycartobj.itemlist.push(item);
              }
                console.log(mycartobj);
                localStorage.setItem('mycart',JSON.stringify(mycartobj));
                count_item();
                alert('Item Added to Cart');
              })
            });

           function count_item(){
            var mycart=localStorage.getItem('mycart');
            if (mycart) {
              var mycartobj=JSON.parse(mycart);
              var total_count=0;
              $.each(mycartobj.itemlist,function(i,v){
                total_count+=v.qty;
              })
              $(".item_count_text").html(total_count);
            }else{
              $(".item_count_text").html(0);
            }
          }

           function showmodel(){
              var mycart=localStorage.getItem('mycart');
              if (mycart) {
                var mycartobj=JSON.parse(mycart);
                var html=''; var j=1; var total=0;
                $.each(mycartobj.itemlist,function(i,v){
                  var id=v.id;
                  var name=v.name;
                  var photo=v.photo;
                  var price=v.price;
                  var qty=v.qty;
                  var subtotal=price*qty;
                  total+=subtotal;
                  html+=`<tr><td>${j}</td>
                            <td>${name}</td>
                            <td>Image</td>
                            <td>${price}</td>
                            <td><i class="fa fa-plus-circle btnplus text-success" data-id=${i}></i> ${qty} <i class="fa fa-minus-circle btnminus text-danger" data-id=${i}></i></td>
                            <td>${subtotal}</td>
                            <td><i class="fa fa-trash fa-lg btndelete text-danger" data-id=${i}></i></td>
                            </tr>`;
                            j++;
                })
                html+=`<tr><td colspan=5>Total</td><td>${
                  total}</td></tr>`;
                $("#item_list").html(html);
              }
              $("#yourcart").modal('show');
             }


          $(document).ready(function(){
            $('.cart').click(function(){
              showmodel();
               })

            $('.blog_seemore').click(function(){
               var image=$(this).data('image');
              var title=$(this).data('title');
              var date=$(this).data('date');
              var description=$(this).data('description');
              $('.blog_image').attr("src", image);
              $('.blog_title').text(title);
              $('.blog_date').text(date);
              $('.blog_description').text(description);
              $("#blog_model").modal('show');
            })
          })
      </script>
    </body>
</html>
