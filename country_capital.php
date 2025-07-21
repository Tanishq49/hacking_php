<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Get the country capital</title>
  <style>
    /* Reset */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #121212;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      color: #eee;
    }

    form {
      background: #1e1e1e;
      padding: 30px 35px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
      width: 100%;
      max-width: 420px;
      text-align: center;
      box-sizing: border-box;
    }

    label {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 15px;
      display: block;
      color: #f0f0f0;
    }

    input[type="text"] {
      width: 100%;
      padding: 14px 18px;
      font-size: 17px;
      border-radius: 8px;
      border: 1.5px solid #444;
      background: #2a2a2a;
      color: #eee;
      transition: border-color 0.3s ease;
      outline: none;
      margin-bottom: 25px;
      box-sizing: border-box;
    }

    input[type="text"]::placeholder {
      color: #888;
    }

    input[type="text"]:focus {
      border-color: #5a9df9;
      box-shadow: 0 0 10px #5a9df9;
      background: #333;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px 0;
      font-size: 18px;
      font-weight: 700;
      border: none;
      border-radius: 30px;
      background: #5a9df9;
      color: #121212;
      cursor: pointer;
      box-shadow: 0 6px 15px rgba(90, 157, 249, 0.7);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="submit"]:hover {
      background: #4285f4;
      box-shadow: 0 8px 22px rgba(66, 133, 244, 0.8);
    }

    /* Output messages container */
    .output-container {
      margin-top: 25px;
      max-width: 420px;
      word-wrap: break-word;
      padding: 18px 25px;
      border-radius: 10px;
      box-sizing: border-box;
      text-align: center;
    }

    .result {
      background-color: #2e7d32; /* dark green */
      color: #d0f0c0;
      font-size: 20px;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(46, 125, 50, 0.7);
    }

    .error {
      background-color: #b00020; /* dark red */
      color: #f9c0c0;
      font-size: 20px;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(176, 0, 32, 0.7);
    }
  </style>
</head>
<body>
  <form action="country_capital.php" method="get" autocomplete="off" spellcheck="false">
    <label for="country-input">Enter the name of the country</label>
    <input type="text" id="country-input" name="country" placeholder="Country name goes here.." />
    <input type="submit" value="Submit" />
  </form>

  <?php
    $country = array(
        "India" => "Delhi",
        "USA" => "Washington",
        "Canada" => "Ottawa",
        "Australia" => "Canberra",
        "Brazil" => "Brasília",
        "China" => "Beijing",
        "France" => "Paris",
        "Germany" => "Berlin",
        "Italy" => "Rome",
        "Japan" => "Tokyo",
        "Mexico" => "Mexico City",
        "Russia" => "Moscow",
        "South Africa" => "Pretoria",
        "United Kingdom" => "London",
        "Argentina" => "Buenos Aires",
        "Belgium" => "Brussels",
        "Colombia" => "Bogotá",
        "Egypt" => "Cairo",
        "Finland" => "Helsinki",
        "Greece" => "Athens",
        "Hungary" => "Budapest",
        "Iceland" => "Reykjavik",
        "Indonesia" => "Jakarta",
        "Ireland" => "Dublin",
        "Israel" => "Jerusalem",
        "Jamaica" => "Kingston",
        "Kenya" => "Nairobi",
        "Lebanon" => "Beirut",
        "Malaysia" => "Kuala Lumpur",
        "Morocco" => "Rabat",
        "Nepal" => "Kathmandu",
        "Netherlands" => "Amsterdam",
        "New Zealand" => "Wellington",
        "Nigeria" => "Abuja",
        "Norway" => "Oslo",
        "Pakistan" => "Islamabad",
        "Peru" => "Lima",
        "Philippines" => "Manila",
        "Poland" => "Warsaw",
        "Portugal" => "Lisbon",
        "Qatar" => "Doha",
        "Romania" => "Bucharest",
        "Saudi Arabia" => "Riyadh",
        "Singapore" => "Singapore",
        "Slovakia" => "Bratislava",
        "South Korea" => "Seoul",
        "Spain" => "Madrid",
        "Sri Lanka" => "Colombo",
        "Sweden" => "Stockholm",
        "Switzerland" => "Bern",
        "Taiwan" => "Taipei",
        "Thailand" => "Bangkok",
        "Turkey" => "Ankara",
        "Ukraine" => "Kyiv",
        "United Arab Emirates" => "Abu Dhabi",
        "Uruguay" => "Montevideo",
        "Venezuela" => "Caracas",
        "Vietnam" => "Hanoi",
        "Zimbabwe" => "Harare",
        "Austria" => "Vienna",
        "Bangladesh" => "Dhaka",
        "Czech Republic" => "Prague",
        "Chile" => "Santiago",
        "Denmark" => "Copenhagen",
        "Ethiopia" => "Addis Ababa",
        "Hungary" => "Budapest",
        "Iraq" => "Baghdad",
        "Jordan" => "Amman",
        "Kazakhstan" => "Nur-Sultan",
        "Latvia" => "Riga",
        "Lithuania" => "Vilnius",
        "Luxembourg" => "Luxembourg",
        "Maldives" => "Malé"
    );
    $user_country = $_GET["country"] ?? '';
    if ($user_country !== '') {
        if (isset($country[$user_country])) {
            echo "<div class='output-container result'>" . htmlspecialchars($country[$user_country]) . "</div>";
        } else {
            echo "<div class='output-container error'>Country name not found, please enter a valid name</div>";
        }
    }
  ?>
</body>
</html>
