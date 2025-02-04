<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background-image: linear-gradient(to right, yellow, blue);
  margin-top: 20px;
  color: #f2f2f2;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>My Website</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<div class="topnav">
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#">Link</a>
  <a href="#" style="float:right">About</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>การดู 60,565,915 ครั้ง  20 มิ.ย. 2019</h5>
      <iframe width="854" height="400"
      src="https://www.youtube.com/embed/ze65bySlmUk?si=M8hf3ElLyNKxkSzv&amp;start=15" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p>เพลง : รอไม่มีกำหนดการ</p>
      <p>ศิลปิน : คณะขวัญใจ</p>
      <p>สังกัด : Gru Records</p>
      <p>คอร์ดเพลง รอไม่มีกำหนดการ จากศิลปิน คณะขวัญใจ เป็นเพลงแนวสตริง โดยคอร์ดในเพลงนี้ประกอบด้วย คอร์ด C, คอร์ด Em, คอร์ด Am, คอร์ด G, คอร์ด Dm, คอร์ด F, คอร์ด Fm, คอร์ด G#dim
      </p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>การดู 6,310,142 ครั้ง  18 ส.ค. 2019</h5>
      <iframe width="854" height="400" src="https://www.youtube.com/embed/bFe5w2bgQC8?si=Lkmuaw1qwQDGAByL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      <p>WHATFALSE</p>
      <p>อะไรเอ่ยสวยกว่าทะเล (What 's more beautiful than the sea?)</p>
      <p>Everything By Surawat Chitsala</p>
      <p>เธอสวยงามเสมอมาในสายตาผมแม้เธอรู้ตัว หรือ ไม่รุ้ตัว ...... </p>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>


