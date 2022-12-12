<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
  <link rel="stylesheet" href="style.css">
    <style>
        .dropdown-menu{ max-height:250px; overflow:auto;margin-bottom:30px; }
        form{
            margin-left:50px;
        }
    </style>
  <title>Campaign Info</title>
</head>
<body>
    <div class="main">
    <h1 class="heading">Campaign Info</h1>
    <form action="" method="post">
        <label for="campaign_name">Enter Campaign name: </label> <input name="campaign_name" type="text" required><br><br>
        <label for="client_name">Enter Client name: </label> <input name="client_name" type="text" required><br><br>
        <label for="agency_name">Enter Agency name: </label> <input name="agency_name" type="text" required><br><br>
        <label for="start_date">Enter Campaign start date: </label> <input name="start_date" type="datetime-local"><br><br>
        <label for="client_vertical">Enter Client Vertical: </label> <input name="client_vertical" type="text"><br><br>
<div style="margin-left:300px;">
<button class="btn btn-success" type="submit" name="submit">Submit</button>
</div>
        
    </form>
    
    </div>
    <script>
let $select = $('#templates_drop').multiselect({
  enableFiltering: true,
  includeFilterClearBtn: true,
  enableCaseInsensitiveFiltering: true
  
});
    </script>
</body>
</html>