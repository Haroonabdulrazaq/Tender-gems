<?php
include 'dbh.php';

session_start();

$fullName=$_POST['fullName'];
$AdmissionNo=$_POST['AdmissionNo'];
$gender=$_POST['gender'];
$DOB=$_POST['DOB'];
$date=$_POST['date'];
$Basic =$_POST['Basic'];
$Term =$_POST['Term'];
//English Language
$EngTest1 =$_POST['EngTest1'];
$EngTest2 =$_POST['EngTest2'];
$EngExam =$_POST['EngExam'];
//Mathematics
$MatTest1 =$_POST['MatTest1'];
$MatTest2 =$_POST['MatTest2'];
$MatExam =$_POST['MatExam'];
//Arabic
$AraTest1 =$_POST['AraTest1'];
$AraTest2 =$_POST['AraTest2'];
$AraExam =$_POST['AraExam'];
//Phonetics
$PhoTest1 =$_POST['PhoTest1'];
$PhoTest2 =$_POST['PhoTest2'];
$PhoExam =$_POST['PhoExam'];
//Deen/Adkhar
$DeeTest1 =$_POST['DeeTest1'];
$DeeTest2 =$_POST['DeeTest2'];
$DeeExam =$_POST['DeeExam'];
//Creative Art
$CreTest1 =$_POST['CreTest1'];
$CreTest2 =$_POST['CreTest2'];
$CreExam =$_POST['CreExam'];
//Hand writin
$HanTest1 =$_POST['HanTest1'];
$HanTest2 =$_POST['HanTest2'];
$HanExam =$_POST['HanExam'];
//Civic Education
$CivTest1 =$_POST['CivTest1'];
$CivTest2 =$_POST['CivTest2'];
$CivExam =$_POST['CivExam'];
//Basic Science
$BasTest1 =$_POST['BasTest1'];
$BasTest2 =$_POST['BasTest2'];
$BasExam =$_POST['BasExam'];
//Verbal Reasoning
$VerTest1 =$_POST['VerTest1'];
$VerTest2 =$_POST['VerTest2'];
$VerExam =$_POST['VerExam'];
//Vocational Aptitude
$VocTest1 =$_POST['VocTest1'];
$VocTest2 =$_POST['VocTest2'];
$VocExam =$_POST['VocExam'];
//Quatitative Reasoning
$QuaTest1 =$_POST['QuaTest1'];
$QuaTest2 =$_POST['QuaTest2'];
$QuaExam =$_POST['QuaExam'];
//Tahfeedh
$TahTest1 =$_POST['TahTest1'];
$TahTest2 =$_POST['TahTest2'];
$TahExam =$_POST['TahExam'];
//Computer Science
$ComTest1 =$_POST['ComTest1'];
$ComTest2 =$_POST['ComTest2'];
$ComExam =$_POST['ComExam'];
//Social Studies
$SocTest1 =$_POST['SocTest1'];
$SocTest2 =$_POST['SocTest2'];
$SocExam =$_POST['SocExam'];
//PHE
$PheTest1 =$_POST['PheTest1'];
$PheTest2 =$_POST['PheTest2'];
$PheExam =$_POST['PheExam'];
//Home Economics
$HomTest1 =$_POST['HomTest1'];
$HomTest2 =$_POST['HomTest2'];
$HomExam =$_POST['HomExam'];
//Yoruba
$YorTest1=$_POST['YorTest1'];
$YorTest2=$_POST['YorTest2'];
$YorExam=$_POST['YorExam'];
//Rating
$handwriting=$_POST['handwriting']; 
$Fluency=$_POST['Fluency'];
$Punctuality=$_POST['Punctuality'];
$Neatness=$_POST['Neatness'];
$Attentiveness=$_POST['Attentiveness'];
$Politeness=$_POST['Politeness'];
$Relationship=$_POST['Relationship'];
$Responsibility=$_POST['Responsibility'];
$SelfControl=$_POST['SelfControl'];
$hdTeacher=$_POST['hdTeacher'];
$clTeacher=$_POST['clTeacher'];
// date, Basic, 

$sql="INSERT INTO result(fullName, AdmissionNo, gender, DOB,Term, EngTest1, EngTest2, EngExam, MatTest1, MatTest2, 
MatExam, AraTest1, AraTest2, AraExam,PhoTest1, PhoTest2, PhoExam, DeeTest1, DeeTest2, DeeExam,CreTest1,CreTest2,CreExam, HanTest1,
HanTest2, HanExam ,CivTest1, CivTest2, CivExam ,BasTest1 ,BasTest2 ,BasExam,VerTest1 ,VerTest2, VerExam, VocTest1 ,VocTest2, VocExam,
QuaTest1, QuaTest2, QuaExam, TahTest1, TahTest2, TahExam, ComTest1, ComTest2, ComExam,SocTest1, SocTest2, SocExam, PheTest1, PheTest2, 
PheExam, HomTest1, HomTest2, HomExam, YorTest1, YorTest2, YorExam, handwriting, Fluency, Punctuality, Neatness, Attentiveness, Politeness,
Relationship, Responsibility, SelfControl ,hdTeacher ,clTeacher )
VALUES('$fullName','$AdmissionNo', '$gender', '$DOB','$date', '$Basic','$Term' ,'$EngTest1', '$EngTest2', '$EngExam', '$MatTest1', '$MatTest2',
 '$MatExam', '$AraTest1', '$AraTest2', '$AraExam', '$PhoTest1', '$PhoTest2', '$PhoExam', '$DeeTest1 ', '$DeeTest2', '$DeeExam','$CreTest1',
 '$CreTest2','$CreExam','$HanTest1', '$HanTest2', '$HanExam', '$CivTest1', '$CivTest2', '$CivExam', '$BasTest1 ', '$BasTest2', '$BasExam', 
 '$VerTest1', '$VerTest2', '$VerExam', '$VocTest1 ', '$VocTest2', '$VocExam', '$QuaTest1', '$QuaTest2', '$QuaExam','$YorTest1','$YorTest2',
 '$YorExam','$TahTest1', '$TahTest2', '$TahExam', '$ComTest1', '$ComTest2', '$ComExam', '$SocTest1','$SocTest2','$SocExam','$PheTest1',
 '$PheTest2','$PheExam','$HomTest1','$HomTest2','$HomExam','$handwriting','$Fluency','$Punctuality', '$Neatness', '$Attentiveness',
 '$Politeness', '$Relationship','$Responsibility','$SelfControl','$hdTeacher','$clTeacher' )";

 $result = $conn -> query($sql);
       
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tender gems Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Result.css" />
    <script src="main.js"></script>
    <style>
    #head{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
#table td{
  /*  padding:10px;*/
    font-size :12px;  
    
}
#table {
   /* padding:10px; */
    width:100%;
}
th{
    font-size:12px;
    text-align:center;   
}
#head h1 h2 h3 h4 h5 {
        text-align:center;
    }
#body{
        font-size:15px;
    }
#skills{
        font-size:12px;
    }
    </style>
</head>
<body id="body">
<h2 id="head"  style= "text-align:center">TENDER GEMS MONTESSORI SCHOOL</h2>
<h3 id="head" style="text-align:center">9, sulieman street off Lagos Road saw-mill ilorin, kwara State<br>P.S Islamic village gerewu ilorin, kwara State<br>Tel:08099560911, 
        08057384925, 08149945549, 07044216950</h3>
        <hr color ="blue">  <hr color ="blue">
        <h3 id="head" style="text-align:center">Pupil's Report sheet</h3>
 <?php
  // Bio-Data

/*  EngTest1 EngTest2 EngExam MatTest1 MatTest2 MatExam AraTest1 AraTest2 AraExam
PhoTest1 PhoTest2 PhoExam DeeTest1 DeeTest2 DeeExam HanTest1 HanTest2 HanExam CivTest1 CivTest2 CivExam BasTest1 BasTest2 BasExam
VerTest1 VerTest2 VerExam VocTest1 VocTest2 VocExam QuaTest1 QuaTest2 QuaExam TahTest1 TahTest2 TahExam ComTest1 ComTest2 ComExam
SocTest1 SocTest2 SocExam PheTest1 PheTest2 PheExam HomTest1 HomTest2 HomExam YorTest1 YorTest2 YorExam*/



echo
"<p>
Bio-Data</br>
Fullname : $fullName <br>
Admission No : $AdmissionNo<br>
Gender : $gender<br>
Date of Birth : $DOB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Date: $date <br>
Basic : $Basic &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Term : $Term <br>
</p>";
?>

  <table id="table">
  <tr>
  <td>Subject</td>
  <th>1st Test(20)</th>
  <th>2nd Test(20)</th> 
  <th>Terminal Exam</th> 
  <th>Terminal Summary</th>
  <th> Grade</th>
  <th> Remark </th>
  </tr>
<tr>
    <td>  
            English Language      
    </td>
    <td><?php echo "  $EngTest1 ";  ?> </td>

    <td><?php echo "  $EngTest2 ";   ?> </td>
        
    <td> <?php echo" $EngExam ";  ?> </td>

    <td> <?php $Engtotal = $EngTest1 + $EngTest2 + $EngExam; echo " $Engtotal "; ?> </td>
    
    <td> <?php grade($Engtotal); ?> </td> 
    <td> <?php Remark($Engtotal); ?> </td>
 </tr>

 <tr>
    <td>  
           Mathematics      
    </td>
    <td><?php echo "  $MatTest1 ";  ?> </td>

    <td><?php echo "  $MatTest2 ";   ?> </td>
        
    <td> <?php echo" $MatExam ";  ?> </td>

    <td> <?php $Mattotal = $MatTest1 + $MatTest2 + $MatExam; echo " $Mattotal "; ?> </td>
    
    <td> <?php grade($Mattotal); ?> </td> 
    <td> <?php Remark($Mattotal); ?> </td>
 </tr>
 <tr>
    <td>  
          Arabic      
    </td>
    <td><?php echo "  $AraTest1 ";  ?> </td>

    <td><?php echo "  $AraTest2 ";   ?> </td>
        
    <td> <?php echo" $AraExam ";  ?> </td>

    <td> <?php $Aratotal = $AraTest1 + $AraTest2 + $AraExam; echo " $Aratotal "; ?> </td>
    
    <td> <?php grade($Aratotal); ?> </td> 
    <td> <?php Remark($Aratotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Phonetics     
    </td>
    <td><?php echo "  $PhoTest1 ";  ?> </td>

    <td><?php echo "  $PhoTest2 ";   ?> </td>
        
    <td> <?php echo" $PhoExam ";  ?> </td>

    <td> <?php $Phototal = $PhoTest1 + $PhoTest2 + $PhoExam; echo " $Phototal "; ?> </td>
    
    <td> <?php grade($Phototal); ?> </td> 
    <td> <?php Remark($Phototal); ?> </td>
 </tr>
 <tr>
    <td>  
         Deen/Adkhar   
    </td>
    <td><?php echo "  $DeeTest1 ";  ?> </td>

    <td><?php echo "  $DeeTest2 ";   ?> </td>
        
    <td> <?php echo" $DeeExam ";  ?> </td>

    <td> <?php $Deetotal = $DeeTest1 + $DeeTest2 + $DeeExam; echo " $Deetotal "; ?> </td>
    
    <td> <?php grade($Deetotal); ?> </td> 
    <td> <?php Remark($Deetotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Creative Art  
    </td>
    <td><?php echo "  $CreTest1 ";  ?> </td>

    <td><?php echo "  $CreTest2 ";   ?> </td>
        
    <td> <?php echo" $CreExam ";  ?> </td>

    <td> <?php $Cretotal = $CreTest1 + $CreTest2 + $CreExam; echo " $Cretotal "; ?> </td>
    
    <td> <?php grade($Cretotal); ?> </td> 
    <td> <?php Remark($Cretotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Hand writing  
    </td>
    <td><?php echo "  $HanTest1 ";  ?> </td>

    <td><?php echo "  $HanTest2 ";   ?> </td>
        
    <td> <?php echo" $HanExam ";  ?> </td>

    <td> <?php $Hantotal = $HanTest1 + $HanTest2 + $HanExam; echo " $Hantotal "; ?> </td>
    
    <td> <?php grade($Hantotal); ?> </td> 
    <td> <?php Remark($Hantotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Civic Education  
    </td>
    <td><?php echo "  $CivTest1 ";  ?> </td>

    <td><?php echo "  $CivTest2 ";   ?> </td>
        
    <td> <?php echo" $CivExam ";  ?> </td>

    <td> <?php $Civtotal = $CivTest1 + $CivTest2 + $CivExam; echo " $Civtotal "; ?> </td>
    
    <td> <?php grade($Civtotal); ?> </td> 
    <td> <?php Remark($Civtotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Basic Science  
    </td>
    <td><?php echo "  $BasTest1 ";  ?> </td>

    <td><?php echo "  $BasTest2 ";   ?> </td>
        
    <td> <?php echo" $BasExam ";  ?> </td>

    <td> <?php $Bastotal = $BasTest1 + $BasTest2 + $BasExam; echo " $Bastotal "; ?> </td>
    
    <td> <?php grade($Bastotal); ?> </td> 
    <td> <?php Remark($Bastotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Verbal Reasoning  
    </td>
    <td><?php echo "  $VerTest1 ";  ?> </td>

    <td><?php echo "  $VerTest2 ";   ?> </td>
        
    <td> <?php echo" $VerExam ";  ?> </td>

    <td> <?php $Vertotal = $VerTest1 + $VerTest2 + $VerExam; echo " $Vertotal "; ?> </td>
    
    <td> <?php grade($Vertotal); ?> </td> 
    <td> <?php Remark($Vertotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Vocational Aptitude
    </td>
    <td><?php echo "  $VocTest1 ";  ?> </td>

    <td><?php echo "  $VocTest2 ";   ?> </td>
        
    <td> <?php echo" $VocExam ";  ?> </td>

    <td> <?php $Voctotal = $VocTest1 + $VocTest2 + $VocExam; echo " $Voctotal "; ?> </td>
    
    <td> <?php grade($Voctotal); ?> </td> 
    <td> <?php Remark($Voctotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Quatitative Reasoning
    </td>
    <td><?php echo "  $QuaTest1 ";  ?> </td>

    <td><?php echo "  $QuaTest2 ";   ?> </td>
        
    <td> <?php echo" $QuaExam ";  ?> </td>

    <td> <?php $Quatotal = $QuaTest1 + $QuaTest2 + $QuaExam; echo " $Quatotal "; ?> </td>
    
    <td> <?php grade($Quatotal); ?> </td> 
    <td> <?php Remark($Quatotal); ?> </td>
 </tr>
 <tr>
    <td>  
         Tahfeedh
    </td>
    <td><?php echo "  $TahTest1 ";  ?> </td>

    <td><?php echo "  $TahTest2 ";   ?> </td>
        
    <td> <?php echo" $TahExam ";  ?> </td>

    <td> <?php $Tahtotal = $TahTest1 + $TahTest2 + $TahExam; echo " $Tahtotal "; ?> </td>
    
    <td> <?php grade($Tahtotal); ?> </td> 
    <td> <?php Remark($Tahtotal); ?> </td>
 </tr>
 <tr>
    <td>  
        Computer Science
    </td>
    <td><?php echo "  $ComTest1 ";  ?> </td>

    <td><?php echo "  $ComTest2 ";   ?> </td>
        
    <td> <?php echo" $ComExam ";  ?> </td>

    <td> <?php $Comtotal = $ComTest1 + $ComTest2 + $ComExam; echo " $Comtotal "; ?> </td>
    
    <td> <?php grade($Comtotal); ?> </td> 
    <td> <?php Remark($Comtotal); ?> </td>
 </tr>
 <tr>
    <td>  
        Social Studies
    </td>
    <td><?php echo "  $SocTest1 ";  ?> </td>

    <td><?php echo "  $SocTest2 ";   ?> </td>
        
    <td> <?php echo" $SocExam ";  ?> </td>

    <td> <?php $Soctotal = $SocTest1 + $SocTest2 + $SocExam; echo " $Soctotal "; ?> </td>
    
    <td> <?php grade($Soctotal); ?> </td> 
    <td> <?php Remark($Soctotal); ?> </td>
 </tr>
 <tr>
    <td>  
        P.H.E
    </td>
    <td><?php echo "  $PheTest1 ";  ?> </td>

    <td><?php echo "  $PheTest2 ";   ?> </td>
        
    <td> <?php echo" $PheExam ";  ?> </td>

    <td> <?php $Phetotal = $PheTest1 + $PheTest2 + $PheExam; echo " $Phetotal "; ?> </td>
    
    <td> <?php grade($Phetotal); ?> </td> 
    <td> <?php Remark($Phetotal); ?> </td>
 </tr>

 <tr>
<td>   Home Economics      </td>
<td> <?php     echo "  $HomTest1 "; ?> </td>
<td>  <?php echo  " $HomTest2 "; ?> </td>    
<td> <?php echo " $HomExam ";  ?> </td>
<td>  <?php $Homtotal = $HomTest1 + $HomTest2 + $HomExam; echo " $Homtotal "; ?> </td>
<td>
<?php
function grade($Homtotal){
if ( $Homtotal>=70){
        echo "A";
}
else if ( $Homtotal>=60){
        echo "B";
    }
else if ( $Homtotal>=50){
        echo "C";
        }
else if ( $Homtotal>=40){
        echo "D";
            }
else if ( $Homtotal>=30){
        echo "E";
            }
else if ($Homtotal<=29 ){
         echo "F";
                    }
                }
                grade($Homtotal);

?></td>
<td>
    <?php
    function Remark($Homtotal)
    {
            if ($Homtotal>=70){
                echo "Excellent";
            }
            elseif ($Homtotal>=60) {
              echo "Very good";
            }
            elseif ($Homtotal>=50) {
               echo "Good";
            }
            elseif ($Homtotal>=40) {
               echo "Fair";
            }
            elseif ($Homtotal>=30) {
               echo "Poor";
            } elseif ($Homtotal<=29) {
               echo "Fail";
            }
            else {
                echo "Error input check scores again!";
            }
            
        }
        Remark($Homtotal);

    ?>
</td>
</tr>
<tr>
    <td>  
      Yoruba
    </td>
    <td><?php echo "  $YorTest1 ";  ?> </td>

    <td><?php echo "  $YorTest2 ";   ?> </td>
        
    <td> <?php echo" $YorExam ";  ?> </td>

    <td> <?php $Yortotal = $YorTest1 + $YorTest2 + $YorExam; echo " $Yortotal "; ?> </td>
    
    <td> <?php grade($Yortotal); ?> </td> 
    <td> <?php Remark($Yortotal); ?> </td>
 </tr>

<tr>
<td> Total Performance  </td>
<td>  <?php  $TotalTest1 = $EngTest1 + $MatTest1 + $AraTest1+ $PhoTest1 + $DeeTest1 + $CreTest1+$HanTest1 + $CivTest1+ $BasTest1+ $VerTest1 +$VocTest1 
            + $QuaTest1 + $TahTest1 + $ComTest1 + $SocTest1 + $PheTest1 +$HomTest1 +$YorTest1;
  echo " $TotalTest1 ";  
  ?>
  
</td>

<td> 
    <?php
       $TotalTest2 = $EngTest2 + $MatTest2 + $AraTest2+ $PhoTest2 + $DeeTest2 + $CreTest2 +$HanTest2 + $HanTest2+ $CivTest2 + $BasTest2+ $VerTest2
        +$VocTest2+$QuaTest2+$TahTest2 +$ComTest2 +$SocTest2 +$PheTest2 +$HomTest2 +$YorTest2 ;
       echo " $TotalTest2 "; 
       ?>
      
</td>
      
<td>
           <?php
           
           $TotalExam = $EngExam  + $MatExam + $AraExam+ $PhoExam + $DeeExam+$CreExam + $HanExam + $CivExam + $BasExam+ $VerExam+$VocExam +$QuaExam
           +$TahExam+$ComExam+$SocExam+$PheExam+$HomExam +$YorExam;
           echo "  $TotalExam "; 
           ?>
</td>
                
           
<td>
           <?php
           $Total = $Engtotal + $Mattotal + $Aratotal+ $Phototal + $Deetotal+$Cretotal + $Hantotal+ $Civtotal+ $Bastotal+$Vertotal +$Voctotal
           +$Quatotal+$Tahtotal+$Comtotal+$Soctotal+$Phetotal+$Homtotal+$Yortotal;
           echo "  $Total "; 
    
           ?>
</td>

</tr>
<tr>
<td>  
Total Average      
</td>
<td> 
  <?php
  $TotalAvg =$TotalTest1 /18;
  $TotalAvgr= number_format($TotalAvg, 2, '.','' );

  echo " $TotalAvgr ";  
  ?>
    
</td>
<td> 
  <?php
  $TotalAvg2 = $TotalTest2 /18;
  $TotalAvgr2= number_format($TotalAvg2, 2, '.','');

            echo "  $TotalAvgr2 ";  
  ?>
    
</td>
<td> 
  <?php
  $TotalExam=$TotalExam /18;
  $TotalExame= number_format($TotalExam, 2, '.' ,'');

            echo " $TotalExame ";  
  ?>
    
</td>
<td> 
  <?php
  $Total=$Total /18;
  $Totally= number_format($Total, 2, '.' ,'');

            echo " $Totally% ";  
  ?>
    
</td>
</tr>
<div>
<table id="skills">
  
<tr>

<td><p style="text-align:center;"><h4>SKILLS AND BEHAVIOUR&nbsp;&nbsp;&nbsp;&nbsp;RATING ( 1 - 5 )</h4></p>  
<?php

echo"<p> Handwriting   : $handwriting ";

echo "<p>Fluency  : $Fluency ";

echo "<p>Punctuality  : $Punctuality ";

echo"<p>Neatness : $Neatness </p>";

echo"<p>Attentiveness : $Attentiveness ";
?>
</td>
<td>
<?php
echo"<br>";
echo"<br>";
echo"<br>";

echo"<p> Politeness   : $Politeness ";

echo "<p>Relationship with others  : $Relationship ";

echo "<p>Self Responsibility  : $Responsibility ";

echo"<p> Self Control: $SelfControl </p>";

echo"<p>Attentiveness : $Attentiveness </p>";
?>
</td>
</tr>
<tr>

    <td>
    <?Php

    echo"<p> Head Teacher's Comment : $hdTeacher </p>";
    ?>
    
</td>
<td style="text-align:right">

    <?php
   
echo"<p>Class Teacher's Comment  : $clTeacher </p>";
?>
</td>
</tr>
</table>
</div>
  </table>  
 <center> <button id="printing"  type="submit"  onclick="window.print()"> Download </button> </center>
</body>
</html>
