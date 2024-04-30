<?php
$GST Available = $_POST["GST AVAILABLE"];
$GST Number = $_POST["GST Number"];
$Case No = $_POST["Case No"];
$Customer Category = $_POST["Customer Category"];
$Customer Identity Number (CustID), if known = $_POST["Customer Identity Number (CustID), if known"];
$Name of the orgqanization/firm with full address = $_POST["Name of the organization/firm with full address"];
$City = $_POST["City"];
$State = $_POST["State"];
$Country = $_POST["Country"];
$PIN  = $_POST["PIN"]
$Contact PERSON  = $_POST["Contact PERSON "]
$STD = $_POST["STD"]
$Phone = $_POST["Phone"]
$Fax  = $_POST["Fax"]
$Mobile = $_POST["Mobile"]
$Email = $_POST["Email"]
$Name and address of the organization/firm in favour of which the Callibration Certificate/Test Report is to be issued (required if it is different from the above; else write "same as above",Not applicable for BND) = $_POST['Name and address of the organization/firm in favour of which the Callibration Certificate/Test Report is to be issued (required if it is different from the above; else write "same as above",Not applicable for BND)'];
$City = $_POST["City"];
$State = $_POST["State"];
$Country = $_POST['Country'];
$PIN = $_POST['PIN'];
$Calibration Certificate/Test Report to be sent at: Address No1 = $_POST['Calibration Certificate/Test Report to be sent at: Address No1'];
$Would you like to have Certificate/Report in = $_POST['Would you like to have Certificate/Report in'];
$NPL's Quotation No = $_Post['NPL's Quotation No'];
$Date  $_POST['Date'];
$Sr. No. = $_POST['Sr. No.'];
$Name of Instrument/Sample/Reference Material(BND) = $_POST['Name of Instrument/Sample/Reference Material(BND)'];
$Make/Model/Sr.No/Batch/Lot No. or any other identification = $_POST['Make/Model/Sr.No/Batch/Lot No. or any other identification'];
$Qty = $_POST['Qty'];
$Calibration/Testing requirements/specifications = $_POST['Calibration/Testing requirements/specifications'];
$Remarks, if any = $_POST['Remarks, if any'];
$Calibration/Testing to be done under = $_POST['Calibration/Testing to be done under'];
$Details about Demand Draft/NEFT/RTGS:Name of the Bank = $_POST['Details about Demand Draft/NEFT/RTGS:Name of the Bank'];
$Branch = $_POST["Branch"];
$Draft/NEFT/RTGS No = $_POST["$Draft/NEFT/RTGS No"];
$Date =$_POST['Date'];
$Amount:Rs = $_POST['Amount:Rs'];
$TDS(if any) = $_POST['TDS(if any'];
$Amount:Rs = $_POST['Amount:Rs'];
$(if any) carry forward from Case No. = $_POST['(if any) carry forward from Case No.'];
$Total(9+10)Rs = $_POST['Total(9+10)Rs.'];
$Mode of collection of certificate/report/Bnd = $_POST['Mode of collection of certificate/report/Bnd'];
$Name of the Depositor = $_POST['Name of the depositor'];
$Signature of the Depositor = $_POST['Signature of the Depositor'];
$Date = $_POST['Date'];
$Case No = $_POST['Case No'];
$Sub-Div.Name = $_POST['Sub-Div.Name'];
$Sub-Div.No = $_POST['Sub-Div.No'];
$Head,Sub-Div. = $_POST['Head,Sub-Div.'];
$Room No = $_POST['Room No'];
$Calibration/Test/BND charges:Rs. = $_POST['Calibration/Test/BND charges:Rs.'];
$Site charges:Rs. = $_POST['Site charges:Rs.'];
$Other charges:Rs. = $_POST['Other charges:Rs.'];
$Sub-total:Rs. = $_POST['Sub-Total:Rs.'];
$GST:Rs. = $_POST['GST:Rs.'];
$Total charges:Rs. = $_POST['Total Charges:Rs.'];
$TDS,if any:Rs. = $_POST['TDS,if any:Rs.'];
$Total Payable:Rs. = $_POST['Total Payable:Rs.'];
$Balance/Surplus:Rs. = $_POST['Balance/Surplus:Rs.'];
$Amount Rs. = $_POST['Amount Rs.'];
$Transferred to Case No. = $_POST['Transferred to Case No.'];
$EDC = $_POST['EDC'];
$Name = $_POST["Name"];
$Digital Signature = $_POST["Digital Signature"];

$conn = new mysqli('localhost', 'root', '', 'test');

// Checking connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Preparing SQL statement
    $stmt = $conn->prepare("INSERT INTO registration 
                            (GST_Available, GST_Number, Name_of_the_organization_firm_with_full_address, City, State, Country, PIN, Contact_Person, STD, Phone, Fax, Mobile, Email, Name_and_address_of_the_organization_firm_with_is_favor_of_which_the_Calibration_Certificate_Test_Report_is_to_be_issued, city, State, Country, PIN,  Calibration_Certificate_Test_Report_to_be_sent_at_Address_No1, Would_you_like_to_have_Certificate_Report_in, NPLs_Quotation_No, Sr_No, Name_of_Instrument_Sample_Reference_Material_BND, Make_Model_Sr_No_Batch_Lot_No_or_any_other_identification, Qty, Calibration_Testing_requirements_specifications, Remarks_if_any, Calibration_Testing_to_be_done_under, Details_about_Demand_Draft_NEFT_RTGS_Name_of_the_Bank, Branch, Draft_NEFT_RTGS_No, Date, Amount_Rs, TDS_if_any, Amount_Rs_if_any_carry_forward_from_Case_No, Total_9_10_Rs, Mode_of_collection_of_certificate_report_BND, By_hand, By_post, Name_of_the_Depositor, Signature_of_the_Depositor, Date, Case_No, Sub_Div_Name, Sub_Div_No, Head_Sub_Div, Room_No, Calibration_Test_BND_charges_Rs, Site_charges_Rs, Other_charges_Rs, Sub_total_Rs, GST_Rs, Total_charges_Rs, TDS_if_any_Rs, Total_Payable_Rs, Balance_Surplus_Rs, Amount_Rs_Transferred_to_Case_No, EDC, Name, Digital_Signature) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Binding parameters
    $stmt->bind_param("siisissssissiiisssssissi", 
                      $GST_Available, 
                      $GST_Number, 
                      $Name_of_the_organization_firm_with_full_address, 
                      $City, 
                      $State, 
                      $Country, 
                      $PIN, 
                      $Contact_Person, 
                      $STD, 
                      $Phone, 
                      $Fax, 
                      $Mobile, 
                      $Email, 
                      $Name_and_address_of_the_organization_firm_with_is_favor_of_which_the_Calibration_Certificate_Test_Report_is_to_be_issued, 
                      $city, 
                      $State, 
                      $Country, 
                      $PIN, 
                      $Calibration_Certificate_Test_Report_to_be_sent_at_Address_No1, 
                      $Would_you_like_to_have_Certificate_Report_in, 
                      $NPLs_Quotation_No, 
                      $Sr_No, 
                      $Name_of_Instrument_Sample_Reference_Material_BND, 
                      $Make_Model_Sr_No_Batch_Lot_No_or_any_other_identification, 
                      $Qty, 
                      $Calibration_Testing_requirements_specifications, 
                      $Remarks_if_any, 
                      $Calibration_Testing_to_be_done_under, 
                      $Details_about_Demand_Draft_NEFT_RTGS_Name_of_the_Bank, 
                      $Branch, 
                      $Draft_NEFT_RTGS_No, 
                      $Date, 
                      $Amount_Rs, 
                      $TDS_if_any, 
                      $Amount_Rs_if_any_carry_forward_from_Case_No, 
                      $Total_9_10_Rs, 
                      $Mode_of_collection_of_certificate_report_BND, 
                      $By_hand, 
                      $By_post, 
                      $Name_of_the_Depositor, 
                      $Signature_of_the_Depositor, 
                      $Date, 
                      $Case_No, 
                      $Sub_Div_Name, 
                      $Sub_Div_No, 
                      $Head_Sub_Div, 
                      $Room_No, 
                      $Calibration_Test_BND_charges_Rs, 
                      $Site_charges_Rs, 
                      $Other_charges_Rs, 
                      $Sub_total_Rs, 
                      $GST_Rs, 
                      $Total_charges_Rs, 
                      $TDS_if_any_Rs, 
                      $Total_Payable_Rs, 
                      $Balance_Surplus_Rs, 
                      $Amount_Rs_Transferred_to_Case_No, 
                      $EDC, 
                      $Name, 
                      $Digital_Signature);

    // Executing statement
    $stmt->execute();

    // Closing statement
    $stmt->close();

    // Closing connection
    $conn->close();

?>
