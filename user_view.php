

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flower Shop Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap');
    :root {
      --primary-color: #6b705c;
      --accent-color: #a5a58d;
      --light-color: #e6e6fa;
      --dark-color: #2f3e46;
    }
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--light-color);
      color: var(--dark-color);
    }
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
      width: 340px;
    }
    input, button {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      background-color: var(--primary-color);
      color: white;
      border: none;
      cursor: pointer;
    }
    button:hover { background-color: #556052; }
    h2 {
      text-align: center;
      color: var(--primary-color);
    }
    #app {
      padding: 40px;
      max-width: 1000px;
      margin: auto;
    }
    section {
      margin-bottom: 40px;
      background: white;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    }
    ul { list-style: none; padding: 0; }
    li { padding: 10px 0; border-bottom: 1px solid #ddd; }
    li:last-child { border-bottom: none; }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    #flower-info {
      font-family: 'Playfair Display', cursive;
      font-size: 18px;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <div>
    <section id="education">
      <h2>About the Flower</h2>
      <div id="flower-info">
        <p>The Lily of the Valley is a fragrant flower known for purity and joy. Our curated collection features skincare, decor, and lifestyle accessories, each delicately themed with this iconic botanical. Explore our offerings for a touch of elegance in your everyday routine.</p>
      </div>
    </section>
    <section id="shop">
      <h2>Shop Products</h2>
      <ul id="product-list">
        <?php
            // $userId = $_GET('userId');

            require('database.php');
            $sql = "SELECT * FROM Products";
            $result = $db->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li><strong>".$row("name")."</strong> - " .$row("category")." - $".$row("price")."</li>";
                }
                
            } else{
                echo "<h3> No Products found.</h3>";
            }
        ?>
      </ul>
    </section>
    <section id="hr">
      <h2>Human Resources</h2>
      <table>
        <thead>
          <tr><th>Name</th><th>Role</th><th>Email</th></tr>
        </thead>
        <tbody id="employee-table"></tbody>
      </table>
    </section>
  </div>
</body>
</html>
