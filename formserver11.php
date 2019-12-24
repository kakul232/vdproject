<!--- Dummy Upload form  Start--->
<?php
// Creating all file type array
$companyType = ['individual' => 'Individual', 'company' => 'Company'];
$DocTypeArray =
  [
    'individual' => ['PAN_CARD' => 'PAN CARD', 'ADHAR_CARD' => 'ADHAR CARD'],
    'company' => [
      'ART_OF_ASSOC' => 'Articles of Association',
      'POA' => 'Power of Attorney granted to its managers, officers or employees to transact business on its behalf',
      'PAN_COMPANY' => 'Copy of PAN CARD',
      'IEC' => 'IEC Copy',
      'ADDRESS_PROOF' => 'Copy of telephone bill / address proof'
    ],
    'partnership' => [
      'ROC' => 'Registration Certificate - ROC',
      'RPD' => 'Registered Partnership deed',
      'POA_PARTNERSHIP' => 'Power of attorney granted to a partner or an employees of the firm to transact business on its behalf',
      'IDE_PER_HOLD_ADDRESS' => 'Any officially valid document identifying the partners and the person holding the power of Attorney and their addresses',
      'TELEPHONE_BILL' => 'Telephone bill in the name of firm/ partners',
    ],
    'foundations' => [
      'COR_found' => 'Certificate of Registration, if registered',
      'POA_FOUND' => 'Power of Attorney granted to transact business on its behalf'
    ]
  ]; ?>
<!--- Dummy Upload form  Start--->

<?php
                                  include_once 'Dbconnect.php';
                                  // Define type 
                                  define('INDIVIDUAL', 'ind');
                                  define('COMPANY', 'cmp');
                                  //$college_id= $_SESSION['admin_id'];
                                  error_reporting(1);
                                  $date_enrollment = $_POST['date_enrollment'];
                                  //$total_amount= $_POST['totalamount'];
                                  date_default_timezone_set("Asia/Calcutta");
                                  $date_enrollment =  date("d-m-Y:H:i:s");
                                 // $email = $_POST['email'];
								  
								  
								  
								  $name = $_POST['name'];
									$email = $_POST['email'];
								$mobile = $_POST['mobile'];
								$teliphone = $_POST['teliphone'];
								$orgname = $_POST['orgname'];
									$regadd = $_POST['regadd'];
								$officeno = $_POST['officeno'];
								$acc_email = $_POST['acc_email'];
								
								$type = $_POST['type'];
									$gst = $_POST['gst'];
								$cst = $_POST['cst'];
								$pan = $_POST['pan'];
								$vat_no = $_POST['vat_no'];
									$feesamount = $_POST['feesamount'];
								$gstamount = $_POST['gstamount'];
								$netamount = $_POST['netamount'];
								$bankname = $_POST['bankname'];
									$branchname = $_POST['branchname'];
								$accountname = $_POST['accountname'];
								$accountno = $_POST['accountnoa'];
								$ifsccode = $_POST['ifsccode'];
									$package_name = $_POST['package_name'];
								$representive_name = $_POST['representive_name'];
								$gold_purity = $_POST['gold_purity'];
								$name_of_certificate = $_POST['name_of_certificate'];
									$name_of_logistics_service_providers = $_POST['name_of_logistics_service_providers'];
								$name_of_jewellary = $_POST['name_of_jewellary'];
								$terms = $_POST['terms'];
								
	
	
	
	
								  
                                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    if (isset($_POST['submit'])) {

                                      /*
    @ CODE BY KAKUL START
    */
                                      echo '<pre>';
                                    //  print_r($_FILES);

                                      // $total = count($_FILES['upload']['name']);
                                      $fileNameArray = [];
                                      $docType = [];
                                     // $eType = $_POST['type'];
									                    $type= $_POST['type'] ;
                                      $docType = $DocTypeArray[$type];


                                      // Loop through each file according docType
                                      try {
                                       
                                        foreach ($docType as $type => $value) {
                                          
                                          //Get the temp file path
                                          echo  $tmpFilePath = $_FILES[$type]['tmp_name'];

                                          //Make sure we have a file path
                                          if ($tmpFilePath != "") {
                                            //Setup our new file path
                                            $newFilePath = "./uploadFiles/" . uniqid('') . $_FILES[$type]['name'];

                                            //Upload the file into the temp dir
                                            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                                              // building array for file table
                                              $fileArray = ['type' => $type, $newFilePath];
                                              array_push($fileNameArray, $fileArray);

                                              //Handle other code here

                                            }
                                          }
                                        }
                                        //echo '<pre> <b>ARRAY TO BE STORED IN TBL_FILE</b>';
                                      //  print_r($fileNameArray);
                                      } catch (Exception $e) {
                                        echo 'Message: ' . $e->getMessage();
                                      }



    /*
    @ CODE BY KAKUL START
    */
    echo $query = "insert into vendor_form_data(date_enrollment,name,email,dob,mobile,teliphone,orgname,regadd,officeno,acc_email,type,file,file1,file2,gst,cst,pan,vat_no,feesamount,gstamount,netamount,bankname,branchname,accountname,accountno,ifsccode,package_name,representive_name,select1,gold_purity,select2,name_of_certificate,select3,name_of_logistics_service_providers,select4,name_of_jewellary,terms) values('$date_enrollment',
		'" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['dob'] . "','" . $_POST['mobile'] . "','" . $_POST['teliphone'] . "','" . $_POST['orgname'] . "','" . $_POST['regadd'] . "','" . $_POST['officeno'] . "','"
      . $_POST['acc_email'] . "','" . $_POST['type'] . "','$final_file','$file1','$file2','" . $_POST['gst'] . "','" . $_POST['cst'] . "','" . $_POST['pan'] . "','" . $_POST['vat_no'] . "','" . $_POST['feesamount'] . "','" . $_POST['gstamount'] . "','" . $_POST['netamount'] . "','" . $_POST['bankname'] . "','" . $_POST['branchname'] . "','" . $_POST['accountname'] . "','" . $_POST['accountno'] . "','" . $_POST['ifsccode'] . "','" . $_POST['package_name'] . "','" . $_POST['representive_name'] . "','" . $_POST['select1'] . "','" . $_POST['gold_purity'] . "','" . $_POST['select2'] . "','" . $_POST['name_of_certificate'] . "','" . $_POST['select3'] . "','" . $_POST['name_of_logistics_service_providers'] . "','" . $_POST['select4'] . "','" . $_POST['name_of_jewellary'] . "','" . $_POST['terms'] . "')";
    mysqli_query($conn, $query);

    $last_id = mysqli_insert_id($conn);

                                            

                                            if ($last_id) {

                                              $user_id = "VITAAZ-" . $last_id;

                                             $customerid = "update vendor_form_data SET `user_id`='" . $user_id . "' where `id`='" . $last_id . "'";
                                              $res1 = mysqli_query($conn, $customerid);


                                              // INSERT QUERY OF FILE 
                                             print_r($fileNameArray);
                                              foreach($fileNameArray as $file){
                                		$Doc_type = $file['type'];
                                          echo  $query= "insert INTO document(`user_id`,`type`,`name`) VALUES('$last_id','$Doc_type','$file[0]')";
                                            $res2 = mysqli_query($conn, $query);
                                       
                                              }
                                    

                                            }



                                            echo "<script>
alert('Thank You!!! Registered succefully');

</script>"; die;
                                          }
                                        
                                      
                                    
                                  } else {
                                    echo '<script language="javascript">';
                                    echo 'alert("Account Number and Retype  Account Number did not match")';
                                    echo '</script>';
                                  }



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vendor Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    input[type=text],
    input[type=password],
    input[type=number],
    input[type=date],
    select {
      width: 100%;
      padding: 5px;
      margin: 5px 0 11px 0;
      display: inline-block;
      border: none;
      background-color: #e0e0d1;
    }
  </style>
</head>

<body style="padding-top:40px;background-color:#d2e7ef;">

  <div class="container">

    <div class="card">
      <div class="card-header"> <a href="index.php"><img src="png1.png" style="float:left"></a>
        <h2 style="float:right;font-family:Monotype Corsiva">Vendor Enrollment Form</h2>
      </div>
      <div class="card-body">
        <br>
        <form action="#" method="post" enctype="multipart/form-data" novalidate>
          <!-- <div class="row">
      <div class="col">
	    <div class="name" style="width: 250px"><b>Customer Enrollment Form No</b></div>
        <input type="text" class="form-control"   name="enrollment_form_no">
      </div>
      <div class="col">
	  <div class="name" style="width: 250px"><b>Date Of Enrollment</b></div>
        <input type="date" class="form-control"  name="date_enrollment">
      </div>
    </div>-->
          <h3>Personal Information</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Name <span style="color:red">*</span></b></div>

              <input type="text" class="form-control" name="name" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Email ID <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="email" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Date Of Birth </b></div>
              <input type="date" class="form-control" name="dob">
            </div>
          </div>


          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Mobile Number <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="mobile" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Telephone Number <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="teliphone" required />
            </div>
          </div>

          <h3>Organization Information</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Name of Organization <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="orgname" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Registered Address <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="regadd" required />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Office Telephone Number <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="officeno" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Account Email ID <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="acc_email" required />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Establistment Type</b></div>
              <select name="type" id="mySelect" onchange="myEstablistment()">
                <option disabled="disabled" selected="selected">Choose option</option>
                <option value="individual">Individual</option>
                <option value="company">Company</option>
                <option value="partnership">Partnership firm</option>
                <option value="foundations">Trusts, Foundations</option>
              </select>
              <?php foreach ($DocTypeArray as $key => $type) { ?>
                <div class="attachment-row" id="<?= $key; ?>" style="display:none;">

                  <!-- <label><b>PAN card</b></label><br>
                <input type="file" class="input-field-attach" name="<?= $type; ?>"><br><br> -->
                  <?php foreach ($type as $key => $type) { ?>
                    <label><?= $type ?></label><br>
                    <input class="input-field-attach" type="file" name="<?= $key; ?>"><br><br>
                  <?php } ?>

                </div><br>
              <?php } ?>


              <div class="attachment-row" id="foundations" style="display:none;">
                <label><b>Certificate of Registration, if registered</b></label><br>
                <input type="file" class="input-field-attach" name="file13"><br><br>

                <label><b>Power of Attorney granted to transact business on its behalf</b></label><br>
                <input type="file" class="input-field-attach" name="file14"><br><br>

                <label><b>Any officially valid document to identify the trustees, settlers, beneficiaries and those holding the power of Attorney, founders/managers/ directors and their addresses</b></label><br>
                <input type="file" class="input-field-attach" name="file15"><br><br>

                <label><b>Resolution of the managing body of the foundation/association</b></label><br>
                <input type="file" class="input-field-attach" name="file16"><br><br>

                <label><b>Telephone bill / Valid address proof</b></label><br>
                <input type="file" class="input-field-attach" name="file17">
                <br><br>

              </div><br>
            </div>

          </div>
          <h3>Taxation Information</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>GST No <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="gst" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>CST No </b></div>
              <input type="text" class="form-control" name="cst">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>PAN No <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="pan" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>VAT TIN No</b></div>
              <input type="text" class="form-control" name="vat_no">
            </div>
          </div>

          <h3>Payment Information</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Fees Amount <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="feesamount" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>GST Amount <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="gstamount" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Net Amount <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="netamount" required />
            </div>
          </div>
          <h3>Bank Details</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Bank Name <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="bankname" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Branch Name <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="branchname" required />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Account Name <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="accountname" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Account Number <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="accountno" required />
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Retype Account No <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="retypeaccount" required />
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>IFSC Code <span style="color:red">*</span></b></div>
              <input type="text" class="form-control" name="ifsccode" required />
            </div>
          </div>
          <h3>Package Selected Information</h3><br>
          <div class="row">
            <div class="col">
              <div class="name" style="width: 250px"><b>Package Name</b></div>
              <input type="text" class="form-control" name="package_name">
            </div>
            <div class="col">
              <div class="name" style="width: 250px"><b>Representative Name</b></div>
              <input type="text" class="form-control" name="representive_name">
            </div>
          </div>
          <div class="form-row" style="line-height: 30px;">
            <div class="mb6" style="width:100%">
              <p style="width:100%"><b>1.</b>100% products are Hallmarked for Gold Purity?
                <input type="checkbox" class="maxtickets_enable_cb" name="select1" value="yes" id="myCheck1" onclick="myFunction1()">Yes
                <input type="text" id="text1" name="" style="display:none">
              </p>
            </div>
          </div>
          <div class="form-row" style="line-height: 30px;">
            <div class="mb6" style="width:100%">
              <p style="width:100%"><b>2.</b>All Diamond / Jadtar jewelry come with a third party certificate? (If yes, please mention names of the certification laboratories / agencies)
                <input type="checkbox" class="maxtickets_enable_cb" name="select2" value="yes" id="myCheck2" onclick="myFunction2()">Yes
                <input type="text" id="text2" name="name_of_certificate" placeholder="please mention names of the certification laboratories / agencies" style="display:none">
              </p>
            </div>
          </div>
          <div class="form-row" style="line-height: 30px;">
            <div class="mb6" style="width:100%">

              <p><b>3.</b>Do you have Logistics services available?
                Please provide names of Logistics Service Providers (i.e. BVC, Sequel, Blue Dart, etc)
                <input type="checkbox" class="maxtickets_enable_cb" name="select3" value="yes" id="myCheck3" onclick="myFunction3()">Yes
                <input type="text" id="text3" name="name_of_logistics_service_providers" placeholder="Please provide names of Logistics Service Providers (i.e. BVC, Sequel, Blue Dart, etc)" style="display:none">
              </p>
            </div>
          </div>
          <div class="form-row" style="line-height: 30px;">
            <div class="mb6" style="width:100%">

              <p><b>4.</b>Are you a member of any jewelry association? Please provide names of jewelry associations with membership ID
                <input type="checkbox" class="maxtickets_enable_cb" name="select4" value="yes" id="myCheck4" onclick="myFunction4()">Yes
                <input type="text" id="text4" name="name_of_jewellary" placeholder="Please provide names of jewellry associations with membership ID" style="display:none">
              </p>
            </div>
          </div>
          <input type="checkbox" class="maxtickets_enable_cb" name="terms" value="yes" required />
          I agree to the <a href="#" data-toggle="modal" data-target="#myModal1" id="myBtn">terms & conditions.</a>
          <br><br>
          <input type="submit" class="btn btn-danger" name="submit" value="Register">

        </form>
      </div>
    </div>
  </div>


  <!-- start The Modal -->
  <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#fff7e6">
          <h4 class="modal-title">TERMS & CONDITIONS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" style="background-color:#fff7e6">

          <p><b>1)</b> Enrollment fees levied by company is non refundable and validity of service is 3 years.</p>
          <p><b>2)</b> Product Photography Guidelines:
            <div style="padding-left:5px">
              <li>1. Product image should display full product. Images that display partial products are not valid.</li>
              <li>2. Photograph must be taken in 100% white background. Other backgrounds /colors shall not be approved.</li>
              <li>3. Resolution of the photographs MUST be at least 1000 pixels x 1000 pixels [Square].</li>
              <li>4. None of the area of the photograph should be blurred or distorted.</li>
              <li>5. Watermark / Branding / Logo / Price Tag etc are NOT valid in the photograph.</li>
              <li>6. Object should be in the center of the photograph and it should cover at least 70% area of the entire photograph.</li>
              <li>7. Photograph should be taken in full bright light.</li>
              <li>8. Displaying product from 4 different angles and a photograph of Hallmark / Certification are mandatory.</li>
              <li>9. Photograph depicting products’ dimensions are highly preferable.</li>
            </div>
          </p>

          <p> <b>3)</b> Delivery of the product will be done by seller and per delivery 150 rupees will be provide by Vitaaz in case of domestic delivery.</p>
          <p><b>4)</b> Every jewellery should have Hallmark and Authentic verification card.</p>
          <p> <b>5)</b> Any jewelry sold through our platform, should be embossed with Vitaaz logo which we will suggest to the Merchant.</p>
          <p> <b>6)</b> Any kind of changes (like weight, carat, CT/KC, design etc) are not acceptable between displayed and delivered product. If such things happened, we(Vitaaz) have right to banned the vendor for lifetime. In such case No payout will transfer (if any).</p>
          <p><b>7)</b> Discount offer will be decided by the vendor and Vitaaz mutually.</p>
          <p><b>8)</b> Vendor have to mention the available quantity of stock to the admin. If any product is out of inventory then vendor cannot display that product on our platform.</p>
          <p><b>9)</b> Vendor have to follow the standard packaging process.</p>
          <p> <b>10)</b> Return/Exchange policy should be very transparent (customer can return within 30 days in such case making charges + 10% of total amount of invoice will be deducted) And In case of exchange due to some issues (like size, polishing etc) no charges will be deduct. </p>
          <p>
            <b>11)</b> Commission chart are as follow:
            <li>Silver - 20%</li>
            <li>Gold - 12%</li>
            <li>Platinum - 17%</li>
            <li>Diamond - 20%</li>

          </p>
          <p><b>12)</b> Payout cycle(30days) will be made as follow: For Example If the jewelry sold between 1st to 15th Dec then Payout will be made between 16th to 30th Jan. (Vice versa )
          </p>


          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- model end-->


  <script>
    function myFunction1() {
      var checkBox = document.getElementById("myCheck1");
      var text = document.getElementById("text1");
      if (checkBox.checked == true) {
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    }
  </script>


  <script>
    function myFunction2() {
      var checkBox = document.getElementById("myCheck2");
      var text = document.getElementById("text2");
      if (checkBox.checked == true) {
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    }
  </script>


  <script>
    function myFunction3() {
      var checkBox = document.getElementById("myCheck3");
      var text = document.getElementById("text3");
      if (checkBox.checked == true) {
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    }
  </script>


  <script>
    function myFunction4() {
      var checkBox = document.getElementById("myCheck4");
      var text = document.getElementById("text4");
      if (checkBox.checked == true) {
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    }
  </script>


  <!--start on select change value and show data accoding to slect value--->
  <script>
    function myEstablistment() {
      var x = document.getElementById("mySelect").value;
      if (x === "individual") {
        $('#individual').show();
        $('#company').hide();
        $('#partnership').hide();
        $('#foundations').hide();
      }
      if (x === "company") {
        $('#company').show();
        $('#individual').hide();
        $('#partnership').hide();
        $('#foundations').hide();
      }
      if (x === "partnership") {
        $('#individual').hide();
        $('#company').hide();
        $('#partnership').show();
        $('#foundations').hide();
      }
      if (x === "foundations") {
        $('#company').hide();
        $('#individual').hide();
        $('#partnership').hide();
        $('#foundations').show();
      }

    }
  </script>


  <!--end on select change value and show data accoding to slect value--->


</body>

</html>
