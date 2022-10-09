<?php include('form_submission.php') ?>
<div class="feedback my-3">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 ">
                <h1 class="feedback-title">FEEDBACK</h1>
                <form action=""  method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter your fullname" name="name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required />
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" required />
                        </div>
                        <div class="col-md-6">
                            <label for="formFileMultiple" class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="file" id="formFileMultiple" onchange="previewFile(this)" required />
                        </div>
                        <div class="col-md-6">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea name="product_feedback" id="" cols="30" rows="5" class="form-control" placeholder="Product Feedback" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <img id="previewImg" style="max-width:250px;margin-top:20px;" />

                        </div>
                    </div>
                        
                    <div class="row mt-5 offset-md-1">
                        <div class="form-check col-md-2">
                            <input class="form-check-input" type="radio" name="review" id="flexRadioDefault1" value="5" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i> 
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <input class="form-check-input" type="radio" name="review" id="flexRadioDefault2" value='4'>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i> 
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            </label>
                        </div>

                        <div class="form-check col-md-2">
                            <input class="form-check-input" type="radio" name="review" id="flexRadioDefault2" value='3'>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="feedback__rating--gold fa-solid fa-star"></i> 
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <input class="form-check-input" type="radio" name="review" id="flexRadioDefault2" value='2'>
                            <label class="form-check-label" for="flexRadioDefault2">
                                <i class="feedback__rating--gold fa-solid fa-star"></i>
                                <i class="feedback__rating--gold fa-solid fa-star"></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star "></i>
                                <i class="fas fa-star"></i>
                            </label>
                        </div>
                        <div class="form-check col-md-2">
                            <input class="form-check-input" type="radio" name="review" id="flexRadioDefault2" value='1'>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <i class="feedback__rating--gold fa-solid fa-star"></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star "></i>
                            <i class="fas fa-star"></i>
                            </label>
                        </div>
                    </div>
                    <script>
                        function previewFile(input) {
                            var file = $("input[type=file]").get(0).files[0];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function() {
                                    $('#previewImg').attr("src", reader.result);
                                }
                                // document.getElementById('temp').style.display = "none";
                                reader.readAsDataURL(file);
                            }
                        }
                    </script>
                    <div class="text-center pt-5 pb-3">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>