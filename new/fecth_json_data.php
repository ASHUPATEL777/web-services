<?php
if(isset($_POST['sub'])){
    $contry=$_POST['country'];
    $state=$_POST['state'];
    header("refresh:2,fecth_json_data.php");
    echo "<div class='alert alert-success mx-auto w-50 mt-2'>fetch data successfully.</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<style>
    .container{
        background-color:rgba(10, 150, 150, 0.5);
    }
</style>
</head>
<body>

    <div class="container mt-5 text-white p-5">
        <h2 class="text-center text-dark">Fetch json data</h2>
        <hr class="border border-lg border-danger w-25 mx-auto">
        <div class="row">
            <div class="col-md-7 mx-auto">
        <form method="post">
            <div class="form-group">
                <label class="text-dark">Select country</label>
                <select name="country" class="form-control">
                    <option value="">-select Country-</option>
                    <?php 
                       $url="country_list.json";
                       $data=file_get_contents($url,true);
                       $cn=json_decode($data, true);
                       foreach($cn as $cn1)
                       {
                       ?>
                      
                       <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
                    <?php
                         }
                       ?>
                </select>
            </div>


            <div class="form-group mt-3">
                <label class="text-dark">Select country</label>
                <select name="state" class="form-control">
                    <option value="">-select Country-</option>
                    <?php 
                       $url="http://country.io/names.json";
                       $data=file_get_contents($url,true);
                       $cn=json_decode($data, true);
                       foreach($cn as $cn1)
                       {
                       ?>
                      
                       <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
                    <?php
                         }
                       ?>
                </select>
            </div>

            <div class="form-group mt-3">
                <input type="submit" name="sub" value="Save" class="btn btn-danger btn-lg px-5">
            </div>
        </form>
        </div>
        </div>
    </div>
</body>
</html>