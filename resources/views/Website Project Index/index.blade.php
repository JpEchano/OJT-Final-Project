<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>La Consolacion Website</title>
        <link rel="stylesheet" href="{{ asset('Website Project/style.css') }}">
        <link rel="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

    <section class="header" id="header">
        <nav>
            <img src="{{ asset('Website Project/Images/logo.png') }}">
            <div class="nav-links" id="navLinks">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16" onclick="hideMenu()">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
                </svg>    
                <ul>
                    <li><a href="#header">HOME</a></li>
                    <li><a href="#course">COURSES</a></li>
                    <li><a href="#campus">CAMPUS</a></li>
                    <li><a href="#cta">CONTACT</a></li>
                </ul>

            </div>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" onclick="showMenu()">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </nav>

    <div class="text-box">

        <h1>UNITAS, CARITAS, VERITAS!</h1>
        <p>The La Consolacion College Daet, Inc. is a private Catholic school run by the Augustinian Sisters of Our Lady of Consolation (ASOLC) in Daet, <br>
            Camarines Norte, Philippines. It was founded in 1948 and named Daet Parochial School by Monsignor Antonino O. Reganit,<br>
            the then parish priest of St. John the Baptist Parish.</p>
        <a href="https://www.facebook.com/lccdaet2020" class="flex-button">VISIT US TO KNOW MORE</a> 
        
    </div>

    </section>

    <!-----course----->
    <section class="course" id="course">

        <h1>Courses We Offer</h1>
        <p>These are the courses that our Institution offers</p>

        <div class="row">

            <div class="course-col">
                <h3>Tourism Management</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>

            <div class="course-col">
                <h3>Hospitality Management</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>

            <div class="course-col">
                <h3>Nursing</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>

        </div>

        <div class="row2">

            <div class="course-col2">
                <h3>Computer Science</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>

            <div class="course-col2">
                <h3>Information Systems</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>

            <div class="course-col2">
                <h3>Technical-Vocational Teacher Education</h3>
                <p>Computer science is the study of computers and computational systems. Unlike electrical and computer engineers, computer scientists deal primarily with software and software systems; this includes their theory, design, development, and application.</p>
            </div>
            
        </div>

    </section>

    <!-----course----->
    <section class="campus" id="campus">

        <h1>Our Campus</h1>
        <div>

            <div class="campus-col">

                <img src="{{ asset('Website Project/Images/campus.jpg')}}">
                <div class="desc">

                    <p>
                        Nestled in the heart of Daet, Camarines Norte, La Consolacion College of Daet, Inc. stands as a beacon of academic excellence and Augustinian values in the Bicol Region. Conveniently located at Vinzons Avenue, Barangay 5, this prestigious institution is easily accessible from various parts of the town and surrounding areas, making it a prime location for students seeking quality education in a vibrant community setting.<br><br>
                        
                        At La Consolacion College of Daet, students are immersed in a nurturing environment that blends rigorous academics with a strong moral foundation, rooted in the Catholic tradition. The campus boasts modern facilities and a supportive atmosphere that encourages students to thrive both intellectually and spiritually.<br><br>
                        
                        Whether you're pursuing basic education, eyeing a college degree, or looking to enhance your professional skills, La Consolacion College of Daet provides a pathway to success, framed by the scenic beauty of Camarines Norte and the rich, cultural heritage of the region. Join us at La Consolacion College of Daet, where your educational journey is our commitment, right in the heart of Daet.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-----cta----->
    <section class="cta" id="cta">

        <h1>Enroll now and become part of our Augustinian community of scholars at<br> La Consolacion College of Daet, Inc.</h1>
        <a href="https://www.facebook.com/lccdaet2020" class="flex-button">CONTACT US</a>

    </section>

    <!-----footer----->
    <section class="footer" id="footer">

        <h4>About Us</h4>
        <p>
            La Consolacion College of Daet, Inc. is a nurturing educational community in Camarines Norte.<br> Rooted in Augustinian values, committed to academic excellence and holistic development.
        </p>
        <div class="icons">
            <a href="https://www.facebook.com/lccdaet2020"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg></a>

            <a href="https://www.facebook.com/profile.php?id=61551235827914"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg></a>

            <a href="https://www.facebook.com/profile.php?id=61552575099368"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg></a>
        </div>
    </section>
    
    

    <!-----Javascript Toggle----->
    <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>


</body>


</html>