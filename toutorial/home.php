<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
  <style>
    body {
        background-image: url('Mpizza.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        height: 100vh;
    }</style>

    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'>Change Profile</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And your recipe is <b> Making pizza at home can be a fun and rewarding experience! Here's a basic recipe for homemade pizza:
                    <br><br><br>

   <I><b>## Ingredients:<br><br>


<I> For the dough:
- 2 ¼ teaspoons (1 packet) active dry yeast
- 1 teaspoon sugar
- 1 ½ cups warm water (around 110°F/45°C)
- 3 ½ cups all-purpose flour
- 2 tablespoons olive oil
- 1 teaspoon salt
<br>

 <I>For the toppings:
- Tomato sauce
- Mozzarella cheese (shredded)
- Your choice of toppings (pepperoni, mushrooms, onions, bell peppers, olives, etc.)
- Olive oil (for brushing the crust)
- Optional: Italian seasoning, garlic powder, red pepper flakes
<br><br>


<b><I>### Instructions:
<br>
<br>


 1. Prepare the Dough:
1. In a small bowl, mix the yeast, sugar, and warm water. Let it sit for about 5-10 minutes until it becomes frothy.
2. In a large mixing bowl, combine the flour and salt. Make a well in the center and pour in the yeast mixture and olive oil.
3. Stir until a dough forms, then knead the dough on a floured surface for about 5-7 minutes until it becomes smooth and elastic.
4. Place the dough in a lightly oiled bowl, cover it with a clean kitchen towel or plastic wrap, and let it rise in a warm place for about 1-2 hours until it doubles in size.
<br><br>


 2. Preheat the Oven:
1. Preheat your oven to the highest temperature it can go, usually around 475°F to 500°F (245°C to 260°C). If you have a pizza stone, place it in the oven to preheat as well.
<br>
<br>


 3. Shape the Dough:
1. After the dough has risen, punch it down to release the air, then divide it into two equal portions for two pizzas.
2. On a floured surface, roll out each portion of dough into your desired pizza shape – round or rectangular.
<br>
<br>


 4. Add Toppings:
1. Place the rolled-out dough on a parchment paper-lined baking sheet or pizza peel if using a pizza stone.
2. Spread tomato sauce over the dough, leaving a small border around the edges.
3. Sprinkle shredded mozzarella cheese evenly over the sauce.
4. Add your choice of toppings.
5. Optional: Sprinkle some Italian seasoning, garlic powder, or red pepper flakes over the toppings for extra flavor.
<br>
<br>


 5. Bake the Pizza:
1. If using a baking sheet, place it in the preheated oven. If using a pizza stone, carefully transfer the pizza (along with the parchment paper) onto the hot stone.
2. Bake for 10-15 minutes, or until the crust is golden brown and the cheese is bubbly and melted.
3. Remove the pizza from the oven and let it cool for a few minutes before slicing.
4. Optional: Brush the crust with olive oil for extra flavor and shine.
<br>
<br>


 6. Serve and Enjoy!
1. Slice the pizza into wedges or squares and serve hot.
2. Enjoy your delicious homemade pizza!
<br>
<br>


Feel free to customize your pizza with your favorite toppings and experiment with different flavors and combinations!</b>.</p> 
            </div>
          </div>
       </div>

    </main>
</body>
</html>