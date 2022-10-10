<style>
    /* .line{
         background-color:rgba(150, 150, 170, 0.2); 
    } */
    </style>
<section>
<div class="container-fluid m-0 mx-auto line">
<h2 class="text-success">Create Your Account <i class="bi bi-person"></i></h2>
<hr class="border border-success border-2 mb-0">

        <div class="row mx-auto gx-2">
            <div class="col-md-5">
                <img src="<?php echo $baseurl;?>img/register.webp" 
                style="height:100%;width:100%" class="img-fluid">
            </div>
            <div class="col-md-5 mt-1 py-2">
            <form method="post" enctype="multipart/form-data" class="register-form">
                <div class="row">
                 <div class="col-md-6">
                    <div class="form-group mt-1">
                    
                    <input type="text" name="fname" class="form-control w-100" placeholder="enter firstname" required>
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group mt-1">
                    <input type="text" name="lname" class="form-control w-100" placeholder="enter lastname" required>
                     </div>
            </div>

            </div>
            
            <!-- ==========row section close====== -->

                <div class="form-group mt-3">
                    <input type="email" name="em" class="form-control w-100" placeholder="enter email address" required>
                </div>

                <div class="form-group mt-3">
                    <input type="password" name="pass" class="form-control w-100" placeholder="enter password" required>
                </div>
                <div class="form-group mt-3">
                    <input type="password" name="cpass" class="form-control w-100" placeholder="enter confirm password" required>
                </div>

                <div class="form-group mt-3">
                    <input type="text" name="phone" class="form-control w-100" placeholder="enter mobile number" required>
                </div>
                <div class="form-group mt-3">
                    <input type="date" name="date" class="form-control w-100" placeholder="enter date" required>
                </div>

                
                <div class="form-group mt-3 d-flex justify-content-start">
                    <h6 class="mb-0 me-4">Gender: </h6>
                    <input type="radio" name="gander" class="form-check-input mx-3" value="male">
                    <label for="" class="form-label">Male</label>

                    <input type="radio" name="gander" value="female" class="form-check-input mx-3">
                    <label for="" class="form-label">Female</label>

                    <input type="radio" name="radio" class="form-check-input mx-3" value="other" required>
                    <label for="" class="form-label">Other</label>
                </div>

                <div class="form-group mt-3">
                    <input type="file" name="img" placeholder="" class="form-control w-75" required>
                </div>
                <!-- state and city -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-3 form-select-lg">
                            <select name="state" class="form-select">
                            <option value="state">-select state-</option>
                            <option value="in" >pakistan</option>
                            <option value="jp">japan</option>
                            <option value="sr">shreelanka</option>
                        </select>
                        </div>              
                    </div>
                    <div class="col-md-6">
                    <div class="form-group mt-3 form-select-lg">
                        <select name="city" class="form-select">
                        <option value="city" selected>-select city-</option>
                        <option value="in">rajkot</option>
                        <option value="ahem">ahemdabadh</option>
                        <option value="jam">jamnagar</option>
                    </select>
                    </div>    
                </div>
                    
                    
                </div>
<!-- state row close -->
                <div class="form-group">
                    <div class="form-floating">
                        <textarea class="form-control" name="address" style="height: 100px;resize: none;font-size: 20px;color:black" required></textarea>
                        <label for="floatingTextarea2">address here...</label>
                      </div>
                    </div>
                    <div class="form-group d-flex justify-content-end mt-3">
                        <input type="submit" name="register" value="Register" class="btn btn-warning btn-lg">
                        <input type="reset" name="All Reset" value="Reset" class="btn btn-secondary btn-lg ms-2">
                    </div>

                </div>
                    
            </form>
        </div>
    </div>
</section>