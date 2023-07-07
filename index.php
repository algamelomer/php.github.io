<!DOCTYPE html>
<html lang="en">
      <head>
      <meta charset="utf-8">
      <meta name="author" content="Egy-Tech">
      <meta name="description" content="this site was made under the supervision of Dr. Ossama El-Nahas by Egy-tech team:(omar algamel,ziad hassan,abdullah 8areb,abdullah mahmoud 5anifr,sherif)which is used for the BATU student results">
      <meta name="keywords" content="BATU,Borg Al-Arab Technological University, batu grades, batugrades.rf.gd, نتائج جامعه برج العرب, جامعه برج العرب, جامعه برج العرب التكنلوجيا,جامعة برج العرب التكنولوجية, نتائج جامعة برج العرب التكنولوجية">
      <meta name="viewport" content="width=device-width, initial-scale=0.75">
      <title>BATU grades</title>
      <link rel="stylesheet" href="index.css">
    </head>
    
    <body data-new-gr-c-s-check-loaded="14.1094.0" data-gr-ext-installed="">
      <form action="index.php" method="post">
      <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
          <div class="loginbackground box-background--white padding-top--64">
          </div>
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center" style="felx">
              <h1>Borg Al-Arab Technological University</h1>
              <img src="logo.png" alt="logo">
            </div>
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                  <span class="padding-bottom--15">Final exam results</span>
                  <form id="stripe-login">
                    <div class="field padding-bottom--24 ">
                      <form>
                      <label for="college">Choose your college<br><!--<p style='color:#5469d4;'>الان نتائج قسم تكنلوجيا المعلومات فقط</p>--></label> 
                      <select name="college" id="college">
                            <option value="null">برجاء اختيار القسم  </option>
                              
                              <optgroup label="صناعه وطاقه">
                                <option value="IT">تكنلوجيا المعلومات</option>
                                <option value="RW">تكنلوجيا السكك الحديديه</option>
                                <option value="SW">تكنلوجيا الغزل والنسيج</option>
                                <option value="TAE">تكنلوجيا الجرارات والمعدات الزاعيه</option>
                                <option value="FI">تكنلوجيا الصناعات الغذائيه </option>
                              </optgroup>

                              <optgroup label="علوم صحيه">
                                <option value="sci">علوم صحيه</option>
                              </optgroup>
                              
                        </select>
                      </div>
                    <div class="field padding-bottom--24">
                      <div>
                        <label for="sitting_num">Sitting number</label>
                        
                      </div>
                      <input required autofocus type="text" name="sitting_num" placeholder="Please enter your sitting number here" maxlength="7" inlength="7">
                    </div>
                    
                    <div class="field padd0ing-bottom--24">
                      <input type="submit" name="submit" value="Continue">
                    </div>
                  </form>
                  </form>
                </form>
                
      <?php
      if(isset($_REQUEST['sitting_num'])){$sitting_num=$_REQUEST['sitting_num'];if (is_numeric($sitting_num)){
              if($_REQUEST["college"]=='null'){echo '<div class="null"><p style="color:red;">please select your college</p><div>';}
              elseif($_REQUEST["college"]=='sci')
              {$row = 1;
                  if (($handle = fopen("grades/it.csv"/*this is the csv file*/, "r")) !== FALSE) {
                      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                          $num = count($data);
                          $row++;
                      for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: health sciences.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                     fclose($handle);if($code=TRUE){echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              elseif($_REQUEST["college"]=='IT'){$row = 1;
                if (($handle = fopen("grades/it.csv"/*this is the csv file*/, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                    for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: it.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                    fclose($handle);if($code=TRUE){echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              elseif($_REQUEST["college"]=='RW')
              {$row = 1;
                if (($handle = fopen("grades/railway.csv"/*this is the csv file*/, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                    for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: railway.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                    fclose($handle);if($code=TRUE){echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              elseif($_REQUEST["college"]=='SW')
              {$row = 1;
                if (($handle = fopen("grades/textiles.csv"/*this is the csv file*/, "r")) !== FALSE) {
                   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                    for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: textiles.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                    fclose($handle);if($code=TRUE){echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              elseif($_REQUEST["college"]=='TAE')
              {$row = 1;
                if (($handle = fopen("grades/tractors and argicultural equipment.csv"/*this is the csv file*/, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                    for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: tractors and argicultural equipment.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                    fclose($handle);if($code=TRUE){echo "<div class='error'><p> style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              elseif($_REQUEST["college"]=='FI')
              {$row = 1;
                if (($handle = fopen("grades/food industry.csv"/*this is the csv file*/, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        $row++;
                    for ($c=1/*this is the colum number*/; $c < 2/*colum num+1*/; $c++) {if ($sitting_num==$data[$c]){header("Location: food industry.php?sitting_num=$sitting_num");/*this is the second web page for grades*/;}else{$code=TRUE;}}}
                    fclose($handle);if($code==TRUE){echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}}
              else {echo "<div class='error'><p style='color:red;'>please recheck your sitting number or college</p></div>";}}
      else {echo "<div class='error'><p style='color:red;'>sitting number contain only numbers</p></div>";}}
      ?>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>  
    </body>
  </html>