<?php $__env->startSection('dashboard-content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    /* Title and Content in a Single Box */
    .review-header {
        margin-bottom: 20px;
        padding: 10px 0;
        text-align:left;
        border-bottom: 1px solid #ddd;
    }

    .review-product {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
    }

    .review-product-info {
        flex-grow: 1;
    }

    .review-rating-container h6 {
        font-weight: bold;
    }

    .review-rating-container {
        display: flex;
        align-items: center;
        gap: 60px; /* Gap between text and stars */
    }

    .review-rating {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-bottom: 15px;
    }

    .review-rating i {
        font-size: 1.5rem;
        color: #ccc; /* Default unfilled star color */
        cursor: pointer; /* Clickable stars */
    }

    .review-rating i.filled {
        color: #FFD700; /* Gold filled star color */
    }

    .review-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        resize: none;
        margin-bottom: 20px;
    }

    .review-upload {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        flex-wrap: wrap; /* Allow wrapping of images/videos */
    }

    .review-upload div {
        flex: 1;
        text-align: center;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        cursor: pointer;
        position: relative;
    }

    .review-upload input[type="file"] {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0; /* Invisible but clickable */
        cursor: pointer;
    }

    .uploaded-item {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .uploaded-item img,
    .uploaded-item video {
        max-width: 100px;
        max-height: 100px;
        margin-right: 10px;
    }

    .remove-item {
        color: red;
        cursor: pointer;
        margin-left: 5px;
    }

    .review-checkbox {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .review-submit {

        width: 15%;
        padding: 10px;
        background: linear-gradient(to right, hsl(36, 100%, 50%), hsl(28, 90%, 50%)); /* Orange gradient */
        border: none;
        border-radius: 5px;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
    }

</style>

<div class="review-container">
    <div class="review-header">
        <h4>Write Reviews</h4>
    </div>

    <div class="review-product">
        <div class="col-md-1 d-flex align-items-center">
            <div style="margin-right: 15px;">
                <!-- Display Product Image Placeholder -->
                <a href="#"><img src="<?php echo e(asset('images/Apple iPhone 14 Pro Max.jpg')); ?>" alt="Product Image" width="70" height="auto"></a>
            </div>
        </div>

        <div class="col-md-3 d-flex flex-column justify-content-center" style="font-size: 13px;margin-top:15px;color:black;">
            <span style="font-weight: 600;">Apple iPhone 14 Pro Max</span>
            <div class="d-flex align-items-center">
                <span class="d-flex align-items-center me-2">
                    <strong>Color:</strong>
                    <span style="display: inline-block; background-color: #000; border: 1px solid #e8ebec; height: 15px; width: 15px; border-radius: 50%; margin-left: 0.5rem;" 
                        title="Color"></span>
                </span> | 
                <span class="me-2">Size: <span style="font-weight: 600;">M</span></span> |
                <span class="ms-2">Qty: <span style="font-weight: 600;">1</span></span>
            </div>
            <h6 class="mt-2" style="font-size: 13px; font-weight: bold;">Rs 120000</h6>  
        </div>
    </div>

    <form>
        <div class="review-rating-container">
            <h6>Overall Rating</h6>
            <div class="review-rating">
                <i class="far fa-star" data-value="1"></i>
                <i class="far fa-star" data-value="2"></i>
                <i class="far fa-star" data-value="3"></i>
                <i class="far fa-star" data-value="4"></i>
                <i class="far fa-star" data-value="5"></i>
            </div>
        </div>

        <textarea class="review-textarea" rows="5" placeholder="Please tell us what needs to be improved."></textarea>

        <div class="review-upload">
            <div>
                <i class="fas fa-camera"></i>
                <p>Upload Photo</p>
                <input type="file" accept="image/*" multiple style="display:none;" id="upload-photo">
                <div id="uploaded-photos" class="uploaded-container"></div>
            </div>
            <div>
                <i class="fas fa-video"></i>
                <p>Upload Video</p>
                <input type="file" accept="video/*" style="display:none;" id="upload-video">
                <div id="uploaded-videos" class="uploaded-container"></div>
            </div>
        </div>

        <div class="review-checkbox">
            <input type="checkbox" id="anonymous">
            <label for="anonymous">Anonymously</label>
        </div>

        <button type="submit" class="review-submit">Submit</button>
    </form>

    <script>
        // Review rating functionality
        document.querySelectorAll('.review-rating i').forEach((star) => {
            star.addEventListener('click', function() {
                const ratingValue = this.getAttribute('data-value');

                document.querySelectorAll('.review-rating i').forEach((s, index) => {
                    if (index < ratingValue) {
                        s.classList.remove('far');
                        s.classList.add('fas', 'filled');
                    } else {
                        s.classList.remove('fas', 'filled');
                        s.classList.add('far');
                    }
                });
            });
        });

        // Photo upload functionality
        const photoInput = document.querySelector('#upload-photo');
        const photoPreviewContainer = document.querySelector('#uploaded-photos'); 

        photoInput.parentElement.addEventListener('click', function() {
            photoInput.click(); 
        });

        photoInput.addEventListener('change', function(event) {
            const files = event.target.files;

            Array.from(files).forEach((file) => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imgWrapper = document.createElement('div');
                    imgWrapper.style.position = 'relative';
                    imgWrapper.style.width = '100px';
                    imgWrapper.style.height = '100px';
                    imgWrapper.style.display = 'inline-block'; 

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100%';
                    img.style.height = '100%';
                    img.style.objectFit = 'cover';
                    imgWrapper.appendChild(img);

                    const deleteBtn = document.createElement('button');
                    deleteBtn.textContent = '×';
                    deleteBtn.style.position = 'absolute';
                    deleteBtn.style.top = '0';
                    deleteBtn.style.right = '0';
                    deleteBtn.style.backgroundColor = '#ff0000';
                    deleteBtn.style.color = '#fff';
                    deleteBtn.style.border = 'none';
                    deleteBtn.style.borderRadius = '50%';
                    deleteBtn.style.width = '20px';
                    deleteBtn.style.height = '20px';
                    deleteBtn.style.cursor = 'pointer';
                    deleteBtn.style.padding = '0';

                    deleteBtn.addEventListener('click', function() {
                        imgWrapper.remove(); 
                    });

                    imgWrapper.appendChild(deleteBtn);
                    photoPreviewContainer.appendChild(imgWrapper);
                };

                reader.readAsDataURL(file);
            });
        });

        // Video upload functionality
        const videoInput = document.querySelector('#upload-video');
        const videoPreviewContainer = document.querySelector('#uploaded-videos');

        videoInput.parentElement.addEventListener('click', function() {
            videoInput.click(); 
        });

        videoInput.addEventListener('change', function(event) {
            const files = event.target.files;

            if (files.length > 1) {
                alert("You can only upload one video at a time.");
                event.target.value = ''; 
                return; 
            } else if (files.length === 1) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const videoWrapper = document.createElement('div');
                    videoWrapper.style.position = 'relative';
                    videoWrapper.style.width = '200px';

                    const video = document.createElement('video');
                    video.src = e.target.result;
                    video.controls = true;
                    video.style.width = '100%';
                    videoWrapper.appendChild(video);

                    const deleteBtn = document.createElement('button');
                    deleteBtn.textContent = '×';
                    deleteBtn.style.position = 'absolute';
                    deleteBtn.style.top = '0';
                    deleteBtn.style.right = '0';
                    deleteBtn.style.backgroundColor = '#ff0000';
                    deleteBtn.style.color = '#fff';
                    deleteBtn.style.border = 'none';
                    deleteBtn.style.borderRadius = '50%';
                    deleteBtn.style.width = '20px';
                    deleteBtn.style.height = '20px';
                    deleteBtn.style.cursor = 'pointer';
                    deleteBtn.style.padding = '0';

                    deleteBtn.addEventListener('click', function() {
                        videoWrapper.remove();
                        videoInput.value = '';
                    });

                    videoWrapper.appendChild(deleteBtn);
                    videoPreviewContainer.appendChild(videoWrapper);
                };

                reader.readAsDataURL(files[0]); 
            }
        });
    </script>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DK-Mart\resources\views/user_dashboard/Write-Reviews.blade.php ENDPATH**/ ?>