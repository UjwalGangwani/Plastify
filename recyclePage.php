<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<style>
    .sec{
        background-image:url(recycleImage1.jpg);
        background-repeat: no-repeat;
        background-size: auto 100%;
        background-size: cover;
        /* opacity: 0.5; */
    }

    .button1{
        background-color: white;


    }
</style>
<body >
    <section class="h-100 h-custom sec container-fluid" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Enter Details of product:</h3>
      
                  <form class="px-md-2"  method="post" action="recycle.php" >
                     <div class="form-outline mb-4">
                        <label class="form-label" style="font-size: 20px;" for="Product_name" name="">Enter Product Name:</label>
                      <input type="text" id="Product_name" class="form-control" name="Product_name" />
                     </div>
                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <div>
                            <label for="Product_type" style="font-size: 20px;" class="form-label" name="">Type of Product:</label>  
                            <<input type="text" id="Product_type" name="Product_type">
                            <!-- <select name="Product_type" id="Product_type" class="form-control">
                                <option value=""></option>
                                <option value="">Waste Paper and Cardboard</option>
                                <option value="">Plastic Recycling</option>
                                <option value="">Metal Recycling</option>
                                <option value="">Wood Recycling</option>
                                <option value="">Glass Recycling</option>
                                <option value="">Clothing and Textile</option>
                              </select> -->
                        </div>
                    </div>
                    <div class="row mb-3 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-12">
                        <div>
                            <label class="form-label" style="font-size: 20px;" for="description" >Enter Description of product:</label>
                            <input name="product_description" id="product_description" cols="30" rows="5" class="form-control"></input>
                        </div>
                      </div>
                    </div>
                    <div class="row pb-2 pb-md-0">
                        <div class="col-md-12">
                          <div>
                              <label class="form-label" style="font-size: 20px;" for="quantity" name="">Enter Quantity of product:</label>
                              <input type="text" id="quantity" class="form-control" name="quantity"/>
                          </div>
                        </div>
                    </div>
                    <!-- <div class="row pb-2 mb-3 pb-md-0 mt-4 md-5">
                        <div class="col-md-12">
                          <div>
                              <label class="form-label" style="font-size: 20px;" for="image" >Image of Product:</label>
                              <input type="file" id="image" class="form-control" name="product_image" />
                          </div>
                        </div>
                      </div> -->
                    <!-- <a href="index.html" class="btn button1 text-dark btn-lg mt-3 fw-bold" type="submit">Submit</a> -->
                    <input type="submit" name="submit" value="Submit">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
	
</body>
</html>