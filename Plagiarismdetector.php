<!DOCTYPE html>
<html>
    <head>
<title>FILIPIKNOWS, A Filipino Grammar and Plagiarism Checker</title>
<link rel="icon" href="C:\Users\Admin\Desktop\IMG\image 1.png" type="image/x-icon">
<link rel="stylesheet" href="C:\Charles Maomay (CCC)\3RD YEAR(1ST SEM)\Prelim\Soft Eng\imgbg.css">
<link href="plagiarismdetector.css" rel="stylesheet">
</head>
<body>
        <h2>
        <img src="C:\Users\Admin\Desktop\IMG\image 1.png" class="image_one">
        <font color="085BA8">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFilipiKnows: A Filipino Grammar and Plagiarism Checker</font>
        <!--<a href="#" class="text_up">Upgrade to Premium&nbsp&nbsp&nbsp&nbsp</a>-->
        <img src="C:\Users\Admin\Desktop\IMG\image 5.png"class="image_5">
        <!--<img src="C:\Users\Admin\Desktop\IMG\image 2.png"class="image_2">-->
        </h2></font>
        <h1>
            <header> 
        <a href="homepage.php">   
        <img src="C:\Users\Admin\Desktop\IMG\image 3.png" class="home_pic">
        <font color="black"class="text_home">HOME</font></a>
        <a href="filipinogrammar.php">
        <font color="lightgray"class="text_gram">FILIPINO GRAMMAR CHECKER</font></a>
        <a href="Plagiarismdetector.php">
            <font color="lightgray"class="text_plagi">PLAGIARISM CHECKER</font></a>
        <a href="FRONTEND.php">
            <font color="lightgray"class="text_both">GRAMMAR AND PLAGIARISM CHECKER</font></a>
          </header></h1>
        <font size="5">
            <center><b>Plagiarism Dectector<br></b>
            Check your work for any kind of infringement copyright <br>
        </center>
        </font>
        <form>
        <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea placeholder="Type your text here"rows ="25" cols="70" class="text-here" required></textarea>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <textarea placeholder="List of matches works:"rows ="25" cols="60" required></textarea>
        </form>
        <br><br>
        <img src="C:\Users\Admin\Desktop\IMG\hands.png" class="image_six">
        <img src="C:\Users\Admin\Desktop\IMG\paper.png" class="image_paper">
        <img src="C:\Users\Admin\Desktop\IMG\x.png" class="image_x">
        <img src="C:\Users\Admin\Desktop\IMG\abc.png" class="image_abc">
        <img src="C:\Users\Admin\Desktop\IMG\check.png" class="image_check">
        <br><br><br><br>
        <h6 class="text_six">Save your violation</h6>
        <h6 class="text_paper">Find plagiarize work <br> with the help of our <br> languange tool package</h6>
        <h6 class="text_abc">Wrong Spelling</h6>
        <h6 class="text_x">Incorrect Functation</h6>
        <h6 class="text_check">Grammatical Errors</h6>
        
        <a href="#" class="check_now">Scan now</a>
        <a href="#" onclick="uploadFile()" class="upload_file">Upload a file</a>
        <!-- Remove this. for testing purposes only. This is how u display result in the front ent -->
        <h2 id='result'></h2> 


<script>
        async function uploadFile() {
            console.log('testing');
            const response = await fetch('http://127.0.0.1:8080/plagiarize/api/test-upload/read.php',
                {
                    method: 'POST',
                    headers: {
                        'Authorization': "Bearer",
                        'Content-Type': 'application/json',
                    },
                    body: {}, //include the file here
                }
            );
            const result = await response.json();
            console.log(result);
            document.getElementById('result').innerHTML = JSON.stringify(result);
        }
</script>


       
</body>
</html>