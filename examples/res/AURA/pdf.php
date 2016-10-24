<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
<link href="http://localhost/fpdf_code/pdf_demo/examples/res/AURA/style.css" rel="stylesheet" type="text/css"/>
 <style type="text/css">
    .tdhead{
      padding: 15px;
      border-bottom: 10px solid #fff;
      font-size: 16px;
      color: #fff;
    }
    .tdtext{
      padding: 15px;
      border-bottom: 10px solid #fff;
      font-size: 16px;
    }
    .tdtext input{
      border:none; background:#d9f1f8; color:#333; width:65%;"
    }
    .tick-head{
      width:55%;
    }

    .numberCircle {
    border-radius: 30px;
    behavior: url(PIE.htc); /* remove if you don't care about IE8 */

    width: 36px;
    height: 36px;
    padding: 8px;

    background: #B6DAF2;
   /* border: 2px solid #666;*/
    color: #fff;
    text-align: center;

    font: 32px Arial, sans-serif;
        font-size: 34px;
}
.page{ width: 100%!important; padding: 0!important }
.textLayer{ width: 100%!important; }

  </style>
</head>

<body>
<div class="page1"></div>
<div class="page2">
  <table width="100%" cellpadding="4" cellspacing="0">

   </table>
</div>
<div class="page3">

<table width="75%" border="0" cellpadding="5" cellspacing="0" class="page3-table">
  <tr>
        <td width="20%"><input type="radio" name="radio" id="radio" value="radio" <?php  echo "checked=checked";?>></td>
        <td width="50%" style="font-size: 16px">Completed and signed AURA Investment Platform application form</td><!-- td// -->
      </tr><!-- <tr>// -->

      <tr>
        <td width="20%"><input type="radio" name="radio" id="radio2" value="radio"></td>
        <td width="50%" style="font-size: 16px">Completed and signed AURA Investment Platform fee schedule</td><!-- td// -->
      </tr><!-- <tr>// -->

      <tr>
        <td width="20%"><input type="radio" name="radio" id="radio3" value="radio"></td>
        <td width="50%" style="font-size: 16px">QROPS Supplement (if applicable)</td><!-- td// -->
      </tr><!-- <tr>// -->

      <tr>
        <td width="20%"><input type="radio" name="radio" id="radio4" value="radio"></td>
        <td width="50%" style="font-size: 16px">Proof of ID</td><!-- td// -->
      </tr><!-- <tr>// -->

      <tr>
        <td width="20%"><input type="radio" name="radio" id="radio5" value="radio"></td>
        <td width="50%" style="font-size: 16px">Proof of Address Your</td><!-- td// -->
      </tr><!-- <tr>// -->
</table>
</div>
<div class="address-section">
   <table width="100%" cellpadding="4" cellspacing="0" style="padding-top:50px;">
    <tbody>

       <tr bgcolor="">
      <td class="" bgcolor="#"><div class="numberCircle">2</div></td>
      <td class="tdtext"><p style="font-size=35px;margin-left:-170px;margin-top:10px;">PERSONAL DETAILS</p></td><!-- td// -->
    </tr>

     <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">First Name (S) :</td>
      <td class="tdtext">  <?php echo "hery"; ?></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Surname :</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <br>

    <tr><td colspan="2"><h3 style="margin-top: 20px;">RESIDENTIAL ADDRESS</h3></td></tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Address Line 1:</td>
      <td class="tdtext">  <input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Address Line 2:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Town :</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">County :</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Postcode:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

    <tr><td colspan="2"><h3 style="margin-top: 20px;">CORRESPONDENCE ADDRESS</h3></td></tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Address Line 1:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Address Line 2:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Town:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">County:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Postcode:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Email:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Telephone:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Date of Birth:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Employer:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Anticipated Retirement Date:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>


    <tr><td colspan="2"><h3 style="margin-top: 20px;">EMPLOYER ADDRESS</h3></td></tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Employer Address Line 1:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Employer Address Line 2:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">County:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Town:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Postcode:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Nationality:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Passport Num:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Country of Residence:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Passport Issuer:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td>
    </tr>
    <br><br>
    <tr bgcolor="#d9f1f8">
      <td bgcolor="#009ecf" style="padding: 15px; color: #fff; font-size: 16px;border-bottom: 10px solid #fff;">Pension Wrapper</td>
      <td style="padding: 15px; border-bottom: 10px solid #fff;">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tbody>
           <tr>
            <td  style="width: 20px;"><input type="checkbox" name="checkbox" id="checkbox"></td>
            <td style="width: 155px">AURA Malta QROPS</td>
            <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
            <td style="width: 155px">AURA GIB QROPS</td>
          </tr>
          <tr>
            <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
            <td style="width: 155px">AURA SIPP</td>
            <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
            <td style="width: 190px">Other (Please Details Below)</td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
  <tr bgcolor="#d9f1f8">
    <td class="tdhead" bgcolor="#009ecf">Other Pension Wrapper:</td>
    <td class="tdtext"><input type="text" name="text" id="demo"/></td>
  </tr>
  <tr bgcolor="#d9f1f8">
    <td class="tdhead" bgcolor="#009ecf">Amount to be transferred:</td>
    <td class="tdtext"><input type="text" name="text" id="demo"/></td>
  </tr>

  <tr bgcolor="#d9f1f8">
    <td bgcolor="#009ecf" style="padding: 15px; color: #fff; font-size: 16px;border-bottom: 10px solid #fff;">Type of Transfer: </td>
    <td style="padding: 15px; border-bottom: 10px solid #fff;">
      <table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
         <tr>
          <td  style="width: 20px;"><input style="width:20px; height:20px; border-radius: 50%;border: 2px solid red;" type="radio" name="checkbox" id="checkbox" <?php echo "checked=checked"; ?>></td>
          <td style="width: 155px">Cash </td>
          <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
          <td style="width: 155px">Cash and Assets</td>
        </tr>
        <tr>
          <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
          <td style="width: 155px">Assets</td>
        </tr>
      </tbody>
    </table>
  </td>
</tr>
<tr><td colspan="2"><p style="color:#039dcf; font-size:20px; font-style:italic; width:80%; margin:0 auto; margin-top:30px; margin-top: 30px; margin-bottom:15px;">Please indicate the source of the transfer into the AURA Account and the client’s source of
  wealth (the economic activity which generates the total net worth of the client):<br>
  <br>
  <br>
  <br>
</p></td></tr>
<tr bgcolor="#d9f1f8">
  <td bgcolor="#009ecf" style="padding: 15px; color: #fff; font-size: 16px;border-bottom: 10px solid #fff;">Source of Transfer:</td>
  <td style="padding: 15px; border-bottom: 10px solid #fff;">
    <table width="100%" cellpadding="0" cellspacing="0">
      <tbody>
       <tr>
        <td  style="width: 20px;"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Savings</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Policy Maturity or Surrender</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 200px">Sale of Financial Investments</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px">Sale of Property</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 200px"> Sale of Business</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px"> Sale of Business</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Divorce Settlement</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px">   Gift</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Retirement Income</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px"> Company Profits</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Interest Income</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 230px">   Other (Please provide details below) </td>
      </tr>
    </tbody>
  </table>
</td>
</tr>

<tr bgcolor="#d9f1f8">
  <td class="tdhead" bgcolor="#009ecf">Other :</td>
  <td class="tdtext"><input type="text" name="text" id="demo"/></td>
</tr>

<tr bgcolor="#d9f1f8">
  <td bgcolor="#009ecf" style="padding: 15px; color: #fff; font-size: 16px;border-bottom: 10px solid #fff;">Source of Wealth:</td>
  <td style="padding: 15px; border-bottom: 10px solid #fff;">
    <table width="100%" cellpadding="0" cellspacing="0">
      <tbody>
       <tr>
        <td  style="width: 20px;"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Savings</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Policy Maturity or Surrender</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 200px">Sale of Financial Investments</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px">Sale of Property</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 200px"> Sale of Business</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px">Inheritance</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Divorce Settlement</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px">   Gift</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Retirement Income</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 190px"> Company Profits</td>
      </tr>
      <tr>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 155px"> Interest Income</td>
        <td  style="width: 20px"><input type="checkbox" name="checkbox" id="checkbox"></td>
        <td style="width: 230px">   Other (Please provide details below) </td>
      </tr>
    </tbody>
  </table>
</td>
</tr>

<tr bgcolor="#d9f1f8">
  <td class="tdhead" bgcolor="#009ecf">Other :</td>
  <td class="tdtext"><input type="text" name="text" id="demo"/></td>
</tr>

<tr bgcolor="#d9f1f8">
  <td colspan="2" class="tdhead" bgcolor="#009ecf">
    <p style="margin:0px 0px; padding:0px 0px"><input type="checkbox" name="checkbox5" id="checkbox5"> &nbsp;&nbsp;Please tick if you, or your principal, is a politically exposed person as defined in the Prevention of Money Laundering and Funding of Terrorism Regulations, 2008.</p>
  </td>
</tr>
<tr bgcolor="#d9f1f8">
  <td colspan="2" class="tdhead" bgcolor="#009ecf">
    <p style="margin:0px 0px; padding:0px 0px"><input type="checkbox" name="checkbox5" id="checkbox5"> &nbsp;&nbsp;The client(s) is/are/was a politically exposed person as defined below.</p>
  </td>
</tr>





</tbody>
</table>
</div>
<div class="page7">

<p>&nbsp;</p>
<!--<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" style="padding-top:320px;">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Name of Bank / Building Society*:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield"></label>
              <input type="text" name="textfield" id="textfield" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Address:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield3"></label>
              <input type="text" name="textfield2" id="textfield3" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Postcode:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield5"></label>
              <input type="text" name="textfield8" id="textfield5" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Account Holder’s number</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield9"></label>
              <input type="text" name="textfield9" id="textfield9" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Bank account number:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield9"></label>
              <input type="text" name="textfield3" id="textfield9" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Sort code:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield9"></label>
              <input type="text" name="textfield4" id="textfield9" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">IBAN:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield9"></label>
              <input type="text" name="textfield5" id="textfield9" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">BIC:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield9"></label>
              <input type="text" name="textfield6" id="textfield9" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>-->
 <table width="100%" cellpadding="4" cellspacing="0" style="padding-top:300px;">
    <tbody>
     <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Name of Bank / Building Society*:</td>
      <td class="tdtext"></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Address:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <br>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Postcode:</td>
      <td class="tdtext">  <input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Account Holder’s number</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

     <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Bank account number:</td>
      <td class="tdtext">  <?php echo "hery"; ?></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Sort code:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <br>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">IBAN:</td>
      <td class="tdtext">  <input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">BIC:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
</tbody>
</table>
<br>
<br><br>
<br>
<br>
</div>
<div class="page8"></div>
<div class="page9"></div>
<div class="page10">
<!--<table width="80%" border="0" align="center" cellpadding="4" cellspacing="0" style="padding-top:100px;">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Name of Adviser:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield"></label>
              <input type="text" name="textfield" id="textfield" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Name of Advisers Firm:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield3"></label>
              <input type="text" name="textfield2" id="textfield3" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tbody>
          <tr>
            <td width="41%" bgcolor="#009ecf" style="color:#fff;">Adviser Email:</td>
            <td width="59%" bgcolor="#d9f1f8"><label for="textfield5"></label>
              <input type="text" name="textfield8" id="textfield5" style="border:none; background:#d9f1f8; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>-->
 <table width="100%" cellpadding="4" cellspacing="0" style="padding-top:80px;">
    <tbody>
     <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Name of Adviser:</td>
      <td class="tdtext">  <?php echo "hery"; ?></td><!-- td// -->
    </tr>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Name of Advisers Firm:</td>
      <td class="tdtext"><input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>
    <br>

    <tr bgcolor="#d9f1f8">
      <td class="tdhead" bgcolor="#009ecf">Adviser Email:</td>
      <td class="tdtext">  <input type="text" name="text" id="demo"/></td><!-- td// -->
    </tr>

</tbody>
</table>
<br>
<table width="100%" border="0"  cellpadding="0" cellspacing="0" >
  <tbody>
    <tr>
     <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
      <td width="53%" style="font-size: 16px; padding-right:90px;">Name of Investor</td>
      <td width="28%" style="font-size: 16px;padding-left:40px;">Signature</td>
      <td width="19%" style="font-size: 16px;padding-left:180px;">Date</td>
       </tbody>
      </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#009ecf"><table width="100%" border="0" cellspacing="2" cellpadding="5" width="352px;">
        <tbody>
          <tr>
            <td width="53%" bgcolor="#fff"><input type="text" name="textfield3" id="textfield2" style="border:none; background:#fff; color:#333; width:70%;"></td>
            <td width="28%" bgcolor="#fff"><input type="text" name="textfield4" id="textfield4" style="border:none; background:#fff; color:#333; width:70%;"></td>
            <td width="19%" bgcolor="#fff"><input type="text" name="textfield5" id="textfield6" style="border:none; background:#fff; color:#333; width:70%;"></td>
          </tr>
        </tbody>
      </table></td>
      </tr>
  </tbody>
</table>
<br>

<br>
<br><br>
<br>
<br>
</div>
<div class="page11"></div>
<div class="page12">
<table width="75%" border="0" cellspacing="0" cellpadding="0" class="page12-text">
  <tbody>
    <tr>
      <td style="color:#000;"><p>THE QUESTIONNAIRE</p><br>
      <p>I am [OPTION 1] years old and I am looking to invest for the [OPTION 2] term.I am currently [OPTION 3] and my household income is [OPTION 4] of which I save [OPTION 5]. My liquid assets are worth [OPTION 6] of which I am looking to invest [OPTION 7] through &nbsp;&nbsp;&nbsp;&nbsp; my AURA account. I believe my risk tolerance is [OPTION 8] and I would say I have [Option 9] experience in Investing. In [Option 10] I may need to draw Income from my AURA Account.</p>
      <p>I would start to feel uncomfortable if my investment fell by [Option 11], but I do accept that investments can go down as well as up and in the event of a sharp market decline I would be prepared to wait [OPTION 12] to recover my original investment. My highest priority when investing is [Option 13] and if I was investing for five years I would expect the value of my AURA account to have grown by at least [OPTION 14].</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div class="page13">
<h4>
  Asset Allocation Chart
</h4>
<div style="margin-left:40px;margin-top:80px;">
<!-- <img src="/var/www/html/url_site/urldemo/pdf_demo/examples/res/AURA/images/donald-trump.jpg"> -->
</div>
</div>
<div class="page14">
<div style="padding-top:425px;"><table width="80%" border="0" align="center" cellpadding="5" cellspacing="2">
  <tbody>
    <tr>
      <td align="left" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="5">
  <tbody>
    <tr>
      <td><textarea class="page14-text"></textarea></td>
    </tr>
    <tr>
      <td><input type="text" value="Name" class="page14-input"></td>
    </tr>
    <tr>
      <td><input type="text" value="Date" class="page14-input"></td>
    </tr>
  </tbody>
</table>
</td>
      <td><table width="100%" border="0" cellspacing="2" cellpadding="5">
        <tbody>
          <tr>
            <td><textarea name="textarea" class="page14-text"></textarea></td>
          </tr>
          <tr>
            <td><input type="text" value="Adviser Name" class="page14-input"></td>
          </tr>
          <tr>
            <td><input type="text" value="Adviser Firm" class="page14-input"></td>
          </tr>
          <tr>
            <td><input type="text" value="Date" class="page14-input"></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table></div>
</div>
 <?php $var = 1;
   if($var==1)
   {
 ?>
<div class="fp1"></div>
 <?php } else if($var ==2)
 { ?>

<div class="fp2"></div>
<?php } else if($var ==3){?>
<div class="fp3"></div>
<?php } else {?>
<div class="fp4"></div>
<?php } ?>
<!-- <div class="fp5"></div>
<div class="fp6"></div>
<div class="fp7"></div>
<div class="fp8"></div>
<div class="fp9"></div>
<div class="fp10"></div> -->
<div class="fp11"></div>

</body>

</html>
