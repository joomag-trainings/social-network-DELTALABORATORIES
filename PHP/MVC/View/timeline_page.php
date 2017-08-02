﻿<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Timeline | Delta</title>
    <link href="Styles/Timeline_Page.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Passion+One" rel="stylesheet">
    <link rel="icon" href="Images/Logos/DELTA_Network-normal.ico" type="image/x-icon">
</head>
<body>
    <div class="Main">
       <div class="ToolBar">
         <img src="Images/Logos/DELTA Network-normal.png" class="ToolBarLogo" alt="" />
           <form action="PHP/MVC/controller/SearchController.php" method="POST">
                   <input id="SearchInput" name="UserSearch" placeholder="            Hovhannes Zohrabyan">
                   <input name="pageName" value="Search" style="visibility: hidden; width: 1px;height:1px;" id="In" title="FriendSearch" />
                   <input name="controller" value="Search" style="visibility: hidden;width: 1px;height:1px;" id="Sm" title="FriendSearch">
                   <button class="FriendSearch" ><i class="fa fa-search fa-2x SearchButton" aria-hidden="true" ></i></button>
           </form>
           <div class="Profile">
               <p style="margin:0 0 0 0;" class="ProfileName">
                    Hovhannes Zohrabyan
               </p>
               <div style="float:left;width:60px;">
                   <a href="profile_page.php"><img src="Images/Profile_Page/ProfileImage.jpg" class="ToolBarProfileImage" alt="" /></a>
               </div>
           </div>
          </div>
        </div>
        <div class="YourPosts">
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="ProfileName PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="ProfileName PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-0.jpeg" class="UploadedPhoto" alt="" />
            </div>
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="ProfileName PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="ProfileName PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-1.jpg" class="UploadedPhoto" alt="" />
            </div>
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="ProfileName PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="ProfileName PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-2.jpeg" class="UploadedPhoto" alt="" />
            </div>
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="ProfileName PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="ProfileName PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-3.jpeg" class="UploadedPhoto" alt="" />
            </div>
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="ProfileName PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="ProfileName PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-4.jpeg" class="UploadedPhoto" alt="" />
            </div>
            <div class="Post">
                <img src="Images/Profile_Page/ProfileImage.jpg" class="PostAuthorImage" alt="ProfileImage" />
                <p class="PostProfileName">
                    Hovhannes Zohrabyan
                </p>
                <p class="PostDate">
                    Uploaded At 10/06/2017
                </p>
                <img src="Images/Profile_Page/Image-5.jpeg" class="UploadedPhoto" alt="" />
            </div>
        </div>
        <div class="PersonalInfo">
            <p class="Username">
                Hovhannes Zohrabyan
            </p>
            <p class="SideBarText">
                <i class="fa fa-calendar" aria-hidden="true"></i> Registration Date: June 2017.
            </p>
            <p class="SideBarText">
                <i class="fa fa-birthday-cake" aria-hidden="true"></i> Birth Date: 6 October 2000.
            </p>
            <div class="PostPreview">
                <p class="SideBarText">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> Posts Preview
                </p>
                <div class="row">
                    <img src="Images/Profile_Page/Image-0.jpeg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-5.jpeg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-2.jpeg" class="PreviewImages" alt="" />
                </div>
                <div class="row">
                    <img src="Images/Profile_Page/Image-3.jpeg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-1.jpg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-4.jpeg" class="PreviewImages" alt="" />
                </div>
                <div class="row">
                    <img src="Images/Profile_Page/Image-0.jpeg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-2.jpeg" class="PreviewImages" alt="" />
                    <img src="Images/Profile_Page/Image-5.jpeg" class="PreviewImages" alt="" />

                </div>
            </div>
        </div>
    <script src="https://use.fontawesome.com/977e6baa13.js"></script>
</body>
</html>
"AddType application/x-httpd-php .html .htm"