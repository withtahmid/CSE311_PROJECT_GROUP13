<html>
    <?php include 'head.php';?>
    <nav>
        <?php include 'menu.php';?>
    </nav> 
    
    <body>
        <?php include 'footer.php';?>
        <div class="container">
            <h1>this is member list page</h1>
         </div>
        <div>
            <row>
            <col width=3 align="center">
            
            <select name="member">
            <?php 
            // Include config file
                $connection = new mysqli("localhost","root","","library_website");
                $sql = mysqli_query($connection, "SELECT firstname FROM memberlist");
                while ($row = $sql->fetch_assoc()){
                echo "<option value=\"member1\">" . $row['firstname'] . "</option>";
                }
            ?>
            </select>
            </col>
            </row>
        </div>
    </body>
</html>

<style>
    .container{
        margin-left: 12.5%;
        margin-right: 12.5%;
        margin-top: 0%;
        margin-bottom: 0%;
    }
</style>