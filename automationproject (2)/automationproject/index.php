<html>
    <head>
        <title>Certificate Automation</title>
        <link rel="stylesheet" href="res/style/style.css">
    </head>
    <body>
        <div id="mySidebar" class="sidebar">
            <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
            <img src="res/images/pes.jpeg" alt="Image" class="sidebar-image">
            <a class="buttons1" onclick="showForm('requestForm')">REQUEST FORM</a>
            <a class="buttons1" onclick="showAdminForm('administration')">ADMINISTRATION</a>
            <a class="buttons1" onclick="showhodForm('hod')">HOD</a>
            <a class="buttons1" onclick="showstaffForm('staff')">STAFF</a>
            <a class="buttons1" onclick="showstudentForm('student')">STUDENT STATUS</a>
        </div>
<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776;</button>

  <div class="container1">
      <div class="wrapper">
            
            <div class="title" id="formTitle" ><h1 style="color: black;"><div class="image-container">
              <img src="res/images/pes.jpeg" alt="">
          </div>Welcome to PESITM</h1></div>
          <form action="student/registration.php" method="POST" data-netlify="true" id="requestForm"style="display: none;" >
              <div class="form">
                
                  <div class="inputfield">
                      <label>NAME</label>
                      <input type="text" class="input" id="name" name="name" placeholder="Enter your name" maxlength="30" pattern="^[a-zA-Z]+$" title="Enter a valid name (2-30 characters)" oninput="this.value = this.value.toUpperCase()" required>
                  </div>
                  
                  <div class="inputfield">
                      <label>USN</label>
                      <input type="text" class="input" name="usn" placeholder="Enter your USN" maxlength="10" pattern="4[Pp][Mm][0-9]{2}[A-Za-z]{2}[0-9]{3}" title="Enter a valid USN (e.g., 4PM20CS073)" oninput="this.value = this.value.toUpperCase()" required>
                  </div>
                  <div class="inputfield">
                    <label>Gmail</label>
                    <input type="text" class="input" id="mail" name="mail" placeholder="Enter your gmail" maxlength="30" pattern="[^\s@]+@[^\s@]+\.[^\s@]+"title="Enter a valid gmail " oninput="this.value = this.value.toLowerCase()" required>
                </div>
                  <div class="inputfield">
                    <label>Pno.</label>
                    <input type="text" class="input" name="sphnum" placeholder="Enter your number" maxlength="10" pattern="[6-9][0-9]{9}" title="Enter a valid number"   required>
                </div>
                  <div class="inputfield">
                      <label>FATHER NAME</label>
                      <input type="text" class="input" id="fname" name="fname" placeholder="Enter your Father Name" maxlength="30" pattern="^[a-zA-Z-' ]+$" title="Enter a valid name (1-32 characters)" oninput="this.value = this.value.toUpperCase()" required>
                  </div>
                  
                  <div class="inputfield">
                      <label>CERTIFICATE TYPE</label>
                      <div class="custom_select">
                          <select id="certificate" name="certificate" required>
                              <option value="">--Select your certificate--</option>
                              <option value="Study Certificate">Study Certificate</option>
                              <option value="Bonafide Certificate">Bonafide Certificate</option>
                          </select>
                      </div>
                  </div>
                  
                  <div class="inputfield">
                    <label>BRANCH</label>
                    <div class="custom_select">
                    <select id="branch" name="branch" required>
                            <option value="">--Select your Branch--</option>
                            <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning (AIML)</option>
                            <option value="Civil Engineering">Civil Engineering (CIV)</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering (CSE)</option>
                            <option value="Computer Science and Design">Computer Science and Design (CSD)</option>
                            <option value="Data Science">Data Science (DS)</option>
                            <option value="Electronics and Communication Engineering">Electronics and Communication Engineering (ECE)</option>
                            <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering (EEE)</option>
                            <option value="Information Science and Engineering">Information Science and Engineering (ISE)</option>
                            <option value="Mechanical Engineering">Mechanical Engineering (MEC)</option>
                            <option value="Master of Business Administration">Master of Business Administration (MBA)</option>
                            <option value="Master of Computer Applications">Master of Computer Applications (MCA)</option>
                                </select>
                    </div>
                  </div>
                  
                  <div class="inputfield">
                      <label>YEAR</label>
                      <div class="custom_select">
                          <select id="year" name="year" required>
                              <option value="">--Select your Year--</option>
                              <option value="FIRST">FIRST</option>
                              <option value="SECOND">SECOND</option>
                              <option value="THIRD">THIRD</option>
                              <option value="FOURTH">FOURTH</option>
                          </select>
                      </div>
                  </div>
          
                  <div class="inputfield">
                      <label>GENDER</label>
                      <div class="radio">
                          <label>
                              <input type="radio" id="gender" name="gender" value="male" required>
                              Male
                          </label>
                          <label>
                              <input type="radio" id="gender" name="gender" value="female" required>
                              Female
                          </label>
                          <label>
                              <input type="radio" id="gender" name="gender" value="other" required>
                              Other
                          </label>
                      </div>
                  </div>
                  
                  <div class="inputfield">
                      <label>REASON</label>
                      <textarea class="textarea" name="reason" id="" cols="30" rows="2" placeholder="Enter your reason" maxlength="100" required></textarea>
                  </div>
                  
                  <div class="inputfield btns" id="btn">
                      <button type="submit" value="REQ" class="btn" href="">REQUEST</button>
                  </div>
              </div>
          </form>
          
          
          <form action="administratoin/admin_login.php" method="POST" id="adminForm" style="display: none;">
              <div class="form">
                  <div class="inputfield">
                      <label>Gmail</label>
                      <input type="text" class="input" name="user_id" placeholder="gmail" pattern="[^\s@]+@[^\s@]+\.[^\s@]+"required>
                  </div>
                  
                  <div class="inputfield">
                      <label>Password</label>
                      <input type="password" class="input" name="password" placeholder="Enter your Password" required>
                  </div>
                  
                  <div class="inputfield btns" id="btn">
                      <button type="submit" value="LOGIN" class="btn">LOGIN</button>
                  </div>
                  
                  <div class="inputfield btns" id="btn" style="display: flex; justify-content: center;">
                    <a href="#" onclick="showForgotPasswordForm()">Forgot Password?</a>
                </div>
                
              </div>
          </form>
          
          
          <form action="administration/hod/hod.php" method="POST" id="hodForm" style="display: none;">
            <div class="form">
                <div class="inputfield">
                    <label>Gmail/Username</label>
                    <input type="text" class="input" name="user_id" placeholder="gmail/username" required>
                </div>
                
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" class="input" name="password" placeholder="Enter your Password" required>
                </div>
                
                <div class="inputfield btns" id="btn">
                    <button type="submit" value="LOGIN" class="btn">LOGIN</button>
                </div>
                
                <div class="inputfield btns" id="btn" style="display: flex; justify-content: center;">
                  <a href="#" onclick="showForgotPasswordForm()">Forgot Password?</a>
              </div>
              
            </div>
        </form>
        
        
        
        <form action="administration/staff/staff_login.php" method="POST" id="staffForm" style="display: none;">
          <div class="form">
              <div class="inputfield">
                  <label>Gmail/Username</label>
                  <input type="text" class="input" name="user_id" placeholder="gmail/username"  required>
              </div>
              
              <div class="inputfield">
                  <label>Password</label>
                  <input type="password" class="input" name="password" placeholder="Enter your Password" required>
              </div>
              
              <div class="inputfield btns" id="btn">
                  <button type="submit" value="LOGIN" class="btn">LOGIN</button>
              </div>
              
              <div class="inputfield btns" id="btn" style="display: flex; justify-content: center;">
                <a href="#" onclick="showForgotPasswordForm()">Forgot Password?</a>
            </div>
            
          </div>
      </form>






      <form action="student/login.php" method="POST" id="studentForm" style="display: none;">
        <div class="form">
            <div class="inputfield">
                <label>USN</label>
                <input type="text" class="input" name="student_id" placeholder="USN" pattern="4[Pp][Mm][0-9]{2}[A-Za-z]{2}[0-9]{3}" required>
            </div>
            
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" name="password" placeholder="Enter your Password" required>
            </div>
            
            <div class="inputfield btns" id="btn">
                <button type="submit" value="LOGIN" class="btn">LOGIN</button>
            </div>
            
            <div class="inputfield btns" id="btn" style="display: flex; justify-content: center;">
              <a href="#" onclick="showForgotPasswordForm()">Forgot Password?</a>
          </div>
          
        </div>
    </form>









          <form action="forgot_password.php" method="POST" id="forgotPasswordForm" style="display: none;">
              <div class="form">
                  <div class="inputfield">
                      <label>Email</label>
                      <input type="email" class="input" name="email" placeholder="Enter your Email" required>
                  </div>
                  
                  <div class="inputfield btns" id="btn">
                      <button type="submit" value="RESET" class="btn">RESET PASSWORD</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>

<script>
  function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
  }

  function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
  }

  function showAdminForm(formType) {
      document.getElementById("formTitle").innerText = formType.toUpperCase() + " LOGIN";
      document.getElementById("requestForm").style.display = "none";
      document.getElementById("adminForm").style.display = "block";
      document.getElementById("hodForm").style.display = "none";
      document.getElementById("staffForm").style.display = "none";
      document.getElementById("studentForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "none";
  }function showhodForm(formType) {
      document.getElementById("formTitle").innerText = formType.toUpperCase() + " LOGIN";
      document.getElementById("requestForm").style.display = "none";
      document.getElementById("hodForm").style.display = "block";
      document.getElementById("adminForm").style.display = "none";
      document.getElementById("staffForm").style.display = "none";
      document.getElementById("studentForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "none";
  }function showstaffForm(formType) {
      document.getElementById("formTitle").innerText = formType.toUpperCase() + " LOGIN";
      document.getElementById("requestForm").style.display = "none";
      document.getElementById("staffForm").style.display = "block";
      document.getElementById("adminForm").style.display = "none";
      document.getElementById("hodForm").style.display = "none";
      document.getElementById("studentForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "none";
  }function showstudentForm(formType) {
      document.getElementById("formTitle").innerText = formType.toUpperCase() + " LOGIN";
      document.getElementById("requestForm").style.display = "none";
      document.getElementById("studentForm").style.display = "block";
      document.getElementById("adminForm").style.display = "none";
      document.getElementById("hodForm").style.display = "none";
      document.getElementById("staffForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "none";
  }
  function showForm(formType) {
    document.getElementById("formTitle").innerText = "REQUEST FORM";

    document.getElementById("requestForm").style.display = "block";
      document.getElementById("studentForm").style.display = "none";
      document.getElementById("adminForm").style.display = "none";
      document.getElementById("hodForm").style.display = "none";
      document.getElementById("staffForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "none";

  }

  function showForgotPasswordForm() {
      document.getElementById("formTitle").innerText = "FORGOT PASSWORD";
      document.getElementById("requestForm").style.display = "none";
      document.getElementById("studentForm").style.display = "none";
      document.getElementById("adminForm").style.display = "none";
      document.getElementById("hodForm").style.display = "none";
      document.getElementById("staffForm").style.display = "none";
      document.getElementById("forgotPasswordForm").style.display = "block";
  }
  
</script>
</body>
</html>