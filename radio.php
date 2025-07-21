<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Radio Button Form</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    form {
      background-color: #ffffffcc; /* white with slight transparency */
      padding: 35px 50px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      min-width: 320px;
      text-align: center;
    }

    label {
      font-size: 18px;
      margin: 12px 0;
      display: flex;
      align-items: center;
      cursor: pointer;
      user-select: none;
    }

    input[type="radio"] {
      margin-right: 15px;
      width: 18px;
      height: 18px;
      cursor: pointer;
    }

    input[type="submit"] {
      margin-top: 25px;
      padding: 12px 30px;
      font-size: 18px;
      border: none;
      border-radius: 30px;
      background: #007BFF;
      color: white;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      width: 100%;
      max-width: 320px;
    }

    input[type="submit"]:hover {
      background: #0056b3;
      box-shadow: 0 8px 20px rgba(0, 86, 179, 0.6);
    }

    .result {
      margin-top: 25px;
      font-size: 20px;
      font-weight: 600;
      color: #222;
      min-height: 28px;
    }

    /* Responsive for smaller screens */
    @media (max-width: 400px) {
      form {
        padding: 25px 20px;
      }
      label {
        font-size: 16px;
      }
      input[type="submit"] {
        font-size: 16px;
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <form action="radio.php" method="post">
    <label><input type="radio" name="credit_card" value="Visa" /> Visa</label>
    <label><input type="radio" name="credit_card" value="Master Card" /> Master Card</label>
    <input type="submit" name="confirm" value="Confirm" />

    <?php
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
        echo "<div class='result'>You selected: $credit_card</div>";
        }else{
            echo "Please make a selection";
        }
    }
    ?>
  </form>
</body>
</html>
