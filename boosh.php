<!-- <?php
// $Name = $_POST['Name'];
// $Password = $_POST['Password'];
// $Email = $_POST['Email'];

// //mengkonekan Database 
// $conn = new mysqli('localhost' , 'root', '' ,'boosh' , 3307);
// if (!$conn ) {
//     die("Error: " . mysqli_connect_error());
// } 
//     $sqlconn = "INSERT INTO regitration ( Name , Email , Password)
//                              VALUES ('$Name' , '$Email' , '$Password');";

//     if ($conn -> query($sqlconn)) {
//         echo "Congrats Dataa Succesfully Added";
//     } else (
//         ("Error: " . mysqli_connect_error($conn))
//     );

// mysqli_close($conn);
?> -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan formulir SignUp dikirimkan
    if (isset($_POST['yaa'])) {
        // Variabel memanggil
        $Name = $_POST['Name'];
        $Password = $_POST['Password'];
        $Email = $_POST['Email'];

        // Koneksi ke database
        $db = mysqli_connect("localhost", "root", "", "boosh", 3307);

        if (!$db) {
            die("Error: " . mysqli_connect_error());
        }

        // Query untuk menyimpan data ke dalam tabel pengguna
        $query = "INSERT INTO registration (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

        // Eksekusi query
        if (mysqli_query($db, $query)) {
            echo "<h1>" . "CONGRATSS SUCCES" . "</h1>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }

        // Tutup koneksi database
        mysqli_close($db);
    }
}
?>
