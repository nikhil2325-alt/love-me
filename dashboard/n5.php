<!DOCTYPE html>
<html lang="en">
<head>
  <title>love</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center text-white"
      style="background-color:#F22991; height:100vh; overflow:hidden;">

  <div class="text-center position-relative">
    <img src="../image/peach-goma-phone.gif">
    <h1>pls maan ja na ab nhi likhenge iske aage code</h1>
    <p class="text-black">bhut glt baat hai yrr</p>

    <a href="n6.php" class="btn btn-light me-5">Yes</a>
    <a href="no.php" class="btn btn-light position-fixed" id="noBtn" style="transition:all .25s ease;top:60%;left:55%;">No</a>

  </div>

<script>
  const noBtn = document.getElementById("noBtn");

  function moveBtn(){
    const bw = noBtn.offsetWidth;
    const bh = noBtn.offsetHeight;

    const maxX = window.innerWidth - bw;
    const maxY = window.innerHeight - bh;

    const x = Math.floor(Math.random() * maxX);
    const y = Math.floor(Math.random() * maxY);

    noBtn.style.left = x + "px";
    noBtn.style.top  = y + "px";
  }

  // Desktop
  noBtn.addEventListener("mouseenter", moveBtn);

  // Mobile
  noBtn.addEventListener("click", function(e){
    e.preventDefault(); // link open na ho
    moveBtn();
  });
</script>

</body>
</html>
