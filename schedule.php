        
<?php 
          require_once('db_connect.php');
          echo " started"; 
          $q="delete from Schedule where cid > 0 ;";
          $res=mysqli_query($conn,$q);
          $q="select cid, count(1) as interests from intrested_in_company i 
          group by cid 
          order by count(1) desc ;";
          $res=mysqli_query($conn,$q);
          while($row=mysqli_fetch_array($res))
          {
            $i++;
            $co = $row['cid'];
            $q = "select c_date  from available_dates where cid = '$co' order by c_date ;";
            $res1=mysqli_query($conn,$q);
            $flag = 0; 
            while($row1=mysqli_fetch_array($res1))
            {
		echo "I got dates\n";
              $di = $row1['c_date'];
              echo $di;
	      $q = "select *  from Schedule where date='$di' ;";
              $result = mysqli_query($conn,$q);
              if(! mysqli_num_rows($result))
              {
  		echo "imsrt  sttrted ";
                $q="insert into Schedule  (`cid`,`date`) values  ( '$co','$di')  ;";
                $res1=mysqli_query($conn,$q);
                echo "inserted ";
		$flag = 1; 
                break;
              }          
              echo mysqli_error($conn);
            }
            if ($flag == 0 )
            { 
		echo "hei  last if ";
              $q = "select max(date) as max_date from Schedule ;";
              $res1=mysqli_fetch_array(mysqli_query($conn,$q));
              $di = $res1['max_date'];
              $q="insert into Schedule  (`cid`,`date`) values  ( '$co',DATE_ADD('$di',INTERVAL 1 DAY))  ;";
              $res1=mysqli_query($conn,$q);
            }
            
          }
				
?>
