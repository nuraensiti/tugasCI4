<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<p>
    {<br>  
  session()->set($session); 1 <br>
  <br>
  return redirect()->to(base_url('home'));<br> 
  } else { 2<br>
      return redirect()->to(base_url('login'))->with('login_failed', 'username / password anda salah'); <br>
  }<br>
  } else { 3<br>
      return redirect()->to(base_url('login'))->with('login_failed', 'username tidak ditemukan');<br>
  }<br>
  } else { 4<br>
      return redirect()->to(base_url('login'))->withInput();<br>
  }<br>
</p>

<h3> Dari codingan diatas di nomor berapakah yang apabila email tidak di temukan</h3>
<p> A. 1 </p>
<p> B. 2 </p>
<p> C. 3 </p>
<p> D. 4 </p>
<p> E. 3 dan 4 benar </p>
</body>
</html>