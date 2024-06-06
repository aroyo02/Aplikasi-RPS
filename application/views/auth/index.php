<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
    body { 
		height: 100vh;
        background-image: linear-gradient(90deg, #7C0E9B 25%, #EC4EA9);
        background-size: 200%;
        animation: gradient-animation 8s infinite alternate  
		/* background-image: url('<?= base_url('assets/img/') ?>betul1.png');
		background-repeat: no-repeat;
		background-size: cover; */
	}
    @keyframes gradient-animation {
        0% {
          background-position: right;
        }

        100% {
          background-position: left;
        }
    }
        
    h3 {
        margin: 20px;
	    color: #fff;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
	    padding-top: 90px;
        padding-bottom: 50px;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background color: transparent;
        border-radius: 5px;
        color:#fff;
    }

    .btn-btn-primary-mb-3 {
        background-color: #753677;
        color: white;
        padding: 0px 50px;
    }
    </style>
</head>
<body>
    <h3>HI! WELCOME</h3>
    <div class="container">
        <form action="" method="POST">
            <?= $this->session->flashdata('message') ?>
            <input type="text" id="username" class="form-control mb-3" placeholder="Username" name="username"/>

            <input type="password" id="password" class="form-control mb-5" placeholder="Password" name="password"/>

            <!-- <div>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"/>
            <label class="form-check-label" for="flexCheckDefault">Human Verification</label>
            </div> -->
            <!-- <p></p> -->

            <div class="d-grid gap-2 d-flex justify-content-center">
                <button class="btn-btn-primary-mb-3 img-hover" name="login" type="submit"><b>Login</b></button>
            </div>
        </form>

        <!-- <div class="d-grid gap-2 d-flex justify-content-center"><b> atau</b></div>

        <div class="d-grid gap-2 d-flex justify-content-center">
            <button class="btn-btn-primary-mb-3 img-hover" type="button">
                <a href="register.php" style="text-decoration: none"><b>Register</b></a>
            </button>
        </div> -->
    </div>
</body>
</html>