<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add your friends</title>
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
        <h1>Add friends</h1>
    </header>
    <section class="search">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.6 18L10.3 11.7C9.8 12.1 9.225 12.4167 8.575 12.65C7.925 12.8833 7.23333 13 6.5 13C4.68333 13 3.14583 12.3708 1.8875 11.1125C0.629167 9.85417 0 8.31667 0 6.5C0 4.68333 0.629167 3.14583 1.8875 1.8875C3.14583 0.629167 4.68333 0 6.5 0C8.31667 0 9.85417 0.629167 11.1125 1.8875C12.3708 3.14583 13 4.68333 13 6.5C13 7.23333 12.8833 7.925 12.65 8.575C12.4167 9.225 12.1 9.8 11.7 10.3L18 16.6L16.6 18ZM6.5 11C7.75 11 8.8125 10.5625 9.6875 9.6875C10.5625 8.8125 11 7.75 11 6.5C11 5.25 10.5625 4.1875 9.6875 3.3125C8.8125 2.4375 7.75 2 6.5 2C5.25 2 4.1875 2.4375 3.3125 3.3125C2.4375 4.1875 2 5.25 2 6.5C2 7.75 2.4375 8.8125 3.3125 9.6875C4.1875 10.5625 5.25 11 6.5 11Z" fill="#9747FF"/>
        </svg>
        <input type="text" placeholder="search friends" name="search">
    </section>
    <section>
        <div class="friendRequest">
            <div class="circle">
            </div>
            <p>Bree Bruggelmans</p>
            <a href="cancelFriend.php">
                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.4 11L11 8.4L13.6 11L15 9.6L12.4 7L15 4.4L13.6 3L11 5.6L8.4 3L7 4.4L9.6 7L7 9.6L8.4 11ZM0 7L4.35 0.85C4.53333 0.583333 4.77083 0.375 5.0625 0.225C5.35417 0.075 5.66667 0 6 0H16C16.55 0 17.0208 0.195833 17.4125 0.5875C17.8042 0.979167 18 1.45 18 2V12C18 12.55 17.8042 13.0208 17.4125 13.4125C17.0208 13.8042 16.55 14 16 14H6C5.66667 14 5.35417 13.925 5.0625 13.775C4.77083 13.625 4.53333 13.4167 4.35 13.15L0 7ZM2.45 7L6 12H16V2H6L2.45 7Z" fill="#FF6464"/>
                </svg>
            </a>
        </div>
    </section>
</body>
</html>