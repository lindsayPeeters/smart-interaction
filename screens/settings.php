<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../style/style.css" type="text/css">
</head>
<body>
    <header>
        <a href="./home.php">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="backbtn">
                <mask id="mask0_49_89" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <rect width="24" height="24" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_49_89)">
                    <path d="M12 20L4 12L12 4L13.425 5.4L7.825 11H20V13H7.825L13.425 18.6L12 20Z" fill="#EEF3F7"/>
                </g>
            </svg>
        </a>
        <h1>Settings</h1>
    </header>
    <section>
        <a href="./requestFriends.php">
            Friend requests
            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 16V13.2C0 12.6333 0.145833 12.1125 0.4375 11.6375C0.729167 11.1625 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64583 4.75 9.3875C5.81667 9.12917 6.9 9 8 9C9.1 9 10.1833 9.12917 11.25 9.3875C12.3167 9.64583 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2708 11.1625 15.5625 11.6375C15.8542 12.1125 16 12.6333 16 13.2V16H0ZM18 16V13C18 12.2667 17.7958 11.5625 17.3875 10.8875C16.9792 10.2125 16.4 9.63333 15.65 9.15C16.5 9.25 17.3 9.42083 18.05 9.6625C18.8 9.90417 19.5 10.2 20.15 10.55C20.75 10.8833 21.2083 11.2542 21.525 11.6625C21.8417 12.0708 22 12.5167 22 13V16H18ZM8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM18 4C18 5.1 17.6083 6.04167 16.825 6.825C16.0417 7.60833 15.1 8 14 8C13.8167 8 13.5833 7.97917 13.3 7.9375C13.0167 7.89583 12.7833 7.85 12.6 7.8C13.05 7.26667 13.3958 6.675 13.6375 6.025C13.8792 5.375 14 4.7 14 4C14 3.3 13.8792 2.625 13.6375 1.975C13.3958 1.325 13.05 0.733333 12.6 0.2C12.8333 0.116667 13.0667 0.0625 13.3 0.0375C13.5333 0.0125 13.7667 0 14 0C15.1 0 16.0417 0.391667 16.825 1.175C17.6083 1.95833 18 2.9 18 4ZM2 14H14V13.2C14 13.0167 13.9542 12.85 13.8625 12.7C13.7708 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5625 10.775 11.3375C9.85833 11.1125 8.93333 11 8 11C7.06667 11 6.14167 11.1125 5.225 11.3375C4.30833 11.5625 3.4 11.9 2.5 12.35C2.35 12.4333 2.22917 12.55 2.1375 12.7C2.04583 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.02083 5.80417 9.4125 5.4125C9.80417 5.02083 10 4.55 10 4C10 3.45 9.80417 2.97917 9.4125 2.5875C9.02083 2.19583 8.55 2 8 2C7.45 2 6.97917 2.19583 6.5875 2.5875C6.19583 2.97917 6 3.45 6 4C6 4.55 6.19583 5.02083 6.5875 5.4125C6.97917 5.80417 7.45 6 8 6Z" fill="#1C1B1F"/>
            </svg>
        </a>
    </section>
    <section id="section-profile">
        <h2>Profile</h2>
        <form action="editProfile.php" id="editProfile">
            <!--input username-->
            <div class="textInput" id="username">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Username" value="">
                <button type="submit">
                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.09671 13.0417H3.52074L12.2938 6.21354L10.8698 5.1052L2.09671 11.9333V13.0417ZM16.6422 5.06562L12.3192 1.74062L13.7432 0.632287C14.1332 0.328814 14.6121 0.177078 15.18 0.177078C15.7479 0.177078 16.2268 0.328814 16.6167 0.632287L18.0408 1.74062C18.4307 2.04409 18.6341 2.41024 18.6511 2.83906C18.668 3.26788 18.4815 3.63402 18.0916 3.93749L16.6422 5.06562ZM15.1673 6.23333L4.38533 14.625H0.0623779V11.2604L10.8443 2.86875L15.1673 6.23333Z" fill="#1C1B1F"/>
                    </svg>
                </button><br><br>
            </div>
            <!--input password-->
            <div class="textInput" id="password">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password" value="">
                <button type="submit">
                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.09671 13.0417H3.52074L12.2938 6.21354L10.8698 5.1052L2.09671 11.9333V13.0417ZM16.6422 5.06562L12.3192 1.74062L13.7432 0.632287C14.1332 0.328814 14.6121 0.177078 15.18 0.177078C15.7479 0.177078 16.2268 0.328814 16.6167 0.632287L18.0408 1.74062C18.4307 2.04409 18.6341 2.41024 18.6511 2.83906C18.668 3.26788 18.4815 3.63402 18.0916 3.93749L16.6422 5.06562ZM15.1673 6.23333L4.38533 14.625H0.0623779V11.2604L10.8443 2.86875L15.1673 6.23333Z" fill="#1C1B1F"/>
                    </svg>
                </button><br><br>
            </div>
            <!--input phonenumber-->
            <div class="textInput" id="phonenumber">
                <label for="phonenumber">Phone number</label><br>
                <input type="tel" name="phonenumber" id="phonenumber" placeholder="+00 000 000 000" value="">
                <button type="submit">
                    <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.09671 13.0417H3.52074L12.2938 6.21354L10.8698 5.1052L2.09671 11.9333V13.0417ZM16.6422 5.06562L12.3192 1.74062L13.7432 0.632287C14.1332 0.328814 14.6121 0.177078 15.18 0.177078C15.7479 0.177078 16.2268 0.328814 16.6167 0.632287L18.0408 1.74062C18.4307 2.04409 18.6341 2.41024 18.6511 2.83906C18.668 3.26788 18.4815 3.63402 18.0916 3.93749L16.6422 5.06562ZM15.1673 6.23333L4.38533 14.625H0.0623779V11.2604L10.8443 2.86875L15.1673 6.23333Z" fill="#1C1B1F"/>
                    </svg>
                </button><br><br>
            </div>
        </form>
    </section>
    <section id="section-secretWords">
        <h2>Secret words</h2>
        <!--Flashlight-->
        <label for="flashlight">Flashlight</label>
        <select id="flashlight" name="flashlight">
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="orange">Orange</option>
            <option value="grape">Grape</option>
        </select><br><br>
        <!--Alarmsound-->
        <label for="alarmsound">Alarmsound</label>
        <select id="alarmsound" name="alarmsound">
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="orange">Orange</option>
            <option value="grape">Grape</option>
        </select><br><br>
        <label for="flashlight">Flashlight</label>
        <select id="flashlight" name="flashlight">
            <option value="apple">Apple</option>
            <option value="banana">Banana</option>
            <option value="orange">Orange</option>
            <option value="grape">Grape</option>
        </select><br>
    </section>
    <button class="purpleBtn"><a href="">Log out</a></button>
</body>
</html>