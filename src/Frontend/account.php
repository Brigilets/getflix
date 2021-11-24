<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-account.css">
    <title>Account</title>
</head>
<body>
<div class="navbar">
        <h1>Getflix</h1>
        <div class="buttons">
            <a href="./main.php"><button type="button" id="home">Home</button></a>
            <a href="./login.php"><button type="button" id="logout">Log out</button></a>
        </div>
</div>
<div class="row userform">
    <div class="col-12 col-md-4 containerForm">
        <form action="account.php">
            <label for="login">Current login:</label><br>
            <input type="text" class="inputfield" id="login" name="login" value="Dan-DH"><br>
            <label for="email">Current email:</label><br>
            <input type="text" class="inputfield" id="email" name="email" value="daniel.diaz.hdez@gmail.com"><br>
            <label for="npassword">New password:</label><br>
            <input type="password" class="inputfield" id="npassword" name="npassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
            <label for="rpassword">Repeat password:</label><br>
            <input type="password" class="inputfield" id="rpassword" name="rpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
            <div class="text-center">
                <button type="submit" class="submit">Update my data</button>
            </div>
        </form>

        <div id="message">
            <p class="passList"><b>Password must contain:</b></p>
            <ul class="passList">
                <li class="passList">A lowercase letter</li>
                <li class="passList">An uppercase letter</li>
                <li class="passList">A number</li>
                <li class="passList">Minimum 8 characters</li>
            </ul>
<!--             <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p> -->
        </div>
    </div>

    <div class="col-12 col-md-7 containerAchievement">
        <div class="row rowAchievement text-center">
            <h3>Your achievements</h3>
            <div class="col-6 col-md-6 achievementRow">
                <img class="achievImage" src="../assets/achievement1.jpg" alt="Level 1">
                <span>Watched your first movie</span><br>
                <img class="achievImage" src="../assets/achievement2.jpg" alt="Level 2">
                <span>Watched five movies</span><br>
                <img class="achievImage" src="../assets/achievement3.jpg" alt="Level 3">
                <span>Watched ten movies</span><br>
                <img class="achievImage" src="../assets/achievement3.jpg" alt="Level 1">
                <span>Contacted the team</span>
            </div>
            <div class="col-6 col-md-6 achievementRow">
                <img class="achievImage" src="../assets/achievement1.jpg" alt="Level 1">
                <span>Wrote your first comment</span><br>
                <img class="achievImage" src="../assets/achievement2.jpg" alt="Level 1">
                <span>Wrote five comments</span><br>
                <img class="achievImage" src="../assets/achievement3.jpg" alt="Level 1">
                <span>Wrote ten comments</span><br>
                <img class="achievImage" src="../assets/achievement3.jpg" alt="Level 1">
                <span>Got all achievements !!</span>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
        <div class="container text-center">
            <div class="row d-flex">
                <div class="col order-md-2 d-none d-sm-block">
                    A collab between <a class="navig-link" href="https://github.com/Dan-DH" target="_blank"
                        rel="noopener">Daniel</a>, <a class=" navig-link" href="https://github.com/Brigilets"
                        target="_blank" rel="noopener">Brigita</a>, <a class=" navig-link"
                        href="https://github.com/ShivaniKhatri96/" target="_blank" rel="noopener">Shivani</a> and <a
                        class=" navig-link" href="https://github.com/teo-cozma" target="_blank"
                        rel="noopener">Teodora</a>.
                </div>
                <div class="col-3 order-md-4  text-center hide2">
                    <a href="https://github.com/Brigilets" target="_blank" rel="noopener">
                        <img src="../assets/brigita.jpg" alt="githubLink" class="portrait">
                    </a>
                </div>
                <div class="col-3 text-center hide2">
                    <a href="https://github.com/Dan-DH" target="_blank" rel="noopener">
                        <img src="../assets/daniIcon.webp" alt="githubLink" class="portrait">
                    </a>
                </div>
                <div class="col-3 text-center hide2">
                    <a href="https://github.com/teo-cozma" target="_blank" rel="noopener">
                        <img src="../assets/teodora.jpg" alt="githubLink" class="portrait">
                    </a>
                </div>
                <div class="col-3  text-center hide2">
                    <a href="https://github.com/ShivaniKhatri96" target="_blank" rel="noopener">
                        <img src="../assets/shivaniIcon.webp" alt="githubLink" class="portrait">
                    </a>
                </div>
                <div class="col col-md-12 mt-2 order-md-1">
                    Copyright &#169; 2021
                </div>
            </div>
        </div>
    </footer>
</body>
</html>