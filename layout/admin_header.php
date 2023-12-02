<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sidebar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <style>
    .container{
      width: 70%;
      margin: 0 auto;
      /* py-4 ms-4 */
      padding-top: 20px;
    }
   
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  height: 60%;
  border: 1px solid #ddd;
  
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
.btn-container{
  display: flex;
}
.view,.edit,.delete{
background-color: #5c636a;
border: 0 solid #e2e8f0;
border-radius: 25px;
box-sizing: border-box;
color: #0d172a;
cursor: pointer;
display: inline-block;
font-size: 12px;
padding: 15px;
text-align: center;
margin-right: 10px;
color: white;
box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
}
.edit{
  background-color: #0b5ed7;
}
.delete{
  background-color: #bb2d3b;
}
.d-flex{
  display: inline-block;
  margin-bottom: 20px;
  background-color: black;
  border: 0 solid #e2e8f0;
  border-radius: 25px;
  box-sizing: border-box;
  color: #0d172a;
  cursor: pointer;
  font-size: 12px;
  padding: 15px;
  margin-right: 10px;
  float: right;
  color: white;
  box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
}
.d-flex a{
  color: white;
}



.form_container-login{
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.login-welcome-row-1 h1{
position: absolute;
top: 2%;
font-size: 20px;
left: 50%;
transform: translate(-50%,0%);
}
.socials-row>a {
    padding: 8px;
    border-radius: 8px;
    width: 100%;
    min-height: 48px;
    display: flex;
    gap: 12px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-size: 1.1rem;
    color: var(--text);
    padding: 8px;
    border: 1px solid var(--primary-light);
    font-weight: 700;
    transform: translate(0%,-40%);

}

.socials-row>a:hover {
    border: 1px solid var(--primary);
}


.divider-1 {
    display: flex;
    flex-direction: row;
    color: var(--secondary);
    gap: 16px;
    align-items: center;
    transform: translate(0%,-100%);

}

.divider-line-1 {
    width: 100%;
    height: 1px;
    background-color: var(--secondary);
    opacity: .2;
}

.my-form-login {
    display: flex;
    flex-direction: column;
    justify-content: start;
    position: relative;
    gap: 16px;
    max-width: 460px;
    width: 100%;
    padding: 48px 32px;
    height: 55vh;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    
}

.form-welcome {
    height: 80px;
    width: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.form-welcome-row {
    display: flex;
    width: 100%;
    flex-direction: column;
    gap: 8px;
}

.my-form__button-1 {
    background-color: var(--primary);
    color: white;
    white-space: nowrap;
    border: none;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 16px;
    line-height: 50px;
    outline: none;
    font-size: 18px;
    letter-spacing: .025em;
    text-decoration: none;
    cursor: pointer;
    font-weight: 800;
    min-height: 50px;
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .15);
    transition: all .3s ease;
    transform: translate(0%,-35%);
}

.my-form__actions {
    display: flex;
    flex-direction: column;
    color: var(--secondary);
    gap: 16px;
    margin-top: 8px;
    transform: translate(0%,-80%);
}

.my-form__actions a {
    color: var(--secondary);
    font-weight: 600;
    text-decoration: none;
}

.my-form__actions a:hover {
    text-decoration: underline;
}

.my-form__row {
    display: flex;
    justify-content: space-between;
}

.my-form__signup {
    display: flex;
    justify-content: center;
}

.my-form__signup a {
    color: var(--primary);
    font-weight: 800;
    text-decoration: none;
    font-size: 18px;
}

.my-form__signup a:hover {
    text-decoration: underline;
}

.text-field input {
    color: var(--secondary);
    font-size: 16px;
    font-weight: 500;
    max-width: 100%;
    width: 100%;
    border: 1px solid var(--secondary);
    height: 50px;
    letter-spacing: .03rem;
    background-color: #dbdede;
    outline: none;
    transition: .25s;
    border-radius: 8px;
    text-indent: 20px;
    margin-top: 4px;
}


.text-field label:focus-within {
    color: var(--primary);
    
}

.text-field {
    position: relative;
    margin-bottom: 10px;
}

.text-field svg {
    position: absolute;
    right: -2px;
    bottom: -4px;
    width: 30px;
    height: 30px;
    transform: translate(-50%, -50%);
    transform-origin: center;
}

.text-field input:focus {
    border: 1px solid var(--primary);
}


.text-field input:focus+svg {
    stroke: var(--primary);
}

.text-field label {
    color: var(--secondary);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .03rem;
    z-index: 10;
}


  </style>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/bootstrap-5.3.2-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

</head>

<body>
  <main class="main-container" style="display: flex;">
<nav class="sidebar">


    </div>
  <!-- the logo and button side  -->
    <div class="sidebar-top-wrapper">
      <!-- the top with the logo image -->
    <div class="sidebar-top">
        <a href="#" class="logo__wrapper">
          <img src="<?php echo ROOT_PATH; ?>assets/images/logo.png" alt="Logo" class="logo-small">
          <span class="hide">
            car-rental
          </span>
        </a>
      </div>
    
    
      <div class="expand-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>


    </div>


    <div class="search__wrapper">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
          stroke="#697089" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <input type="search" placeholder="Search for anything...">
    </div>
    <div class="sidebar-links">
      <h2>Main</h2>
      <ul>
        

        <li id="show_cars">
          <a href="<?php echo ROOT_PATH; ?>admin/" title="Reports" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report-analytics" width="24"
              height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
              <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
              <path d="M9 17v-5" />
              <path d="M12 17v-1" />
              <path d="M15 17v-3" />
            </svg>
            <span class="link_span hide">Cars</span>
          </a>
        </li>


        <li id="show_users">
          <a href="<?php echo ROOT_PATH; ?>admin/users" title="Users" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
              <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <span class="link_span hide">Users</span>
            <!-- <span class="tooltip__content">Customers</span> -->
          </a>
        </li>

        <li id="show_users">
          <a href="<?php echo ROOT_PATH; ?>admin/rentdetails" title="rent-details" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
              <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
            </svg>
            <span class="link_span hide">Rents</span>
            <!-- <span class="tooltip__content">Customers</span> -->
          </a>
        </li>

    </div>




    <div class="sidebar-links bottom-links">
      <h2>Settings</h2>
      <ul>
        <li>
          <a href="#settings" title="Settings" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
              </path>
              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
            </svg>
            <span class="link_span hide">Settings</span>
            <span class="tooltip__content">Settings</span>
          </a>
        </li>
   
      </ul>
    </div>


    

    <div class="sidebar__profile">
      <div class="avatar__wrapper">
        <img class="avatar" src="./assets/images/IMG_9024.jpg" alt="Joe Doe Picture">
        <div class="online__status"></div>
      </div>
      <section class="avatar__name hide">
        <div class="user-name">hamood</div>
        <div class="email">hamod2131.a@gmail.com</div>
      </section>
      <a href="logout" class="logout">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
          <path d="M9 12h12l-3 -3"></path>
          <path d="M18 15l3 -3"></path>
        </svg>
      </a>
    </div>


    </div>

  </nav>