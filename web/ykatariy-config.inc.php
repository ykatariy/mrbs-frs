<?php
/*********************************
 * Site identification information
 *********************************/
$mrbs_admin = "IT Assistance";
$mrbs_admin_email = "help@systemsbiology.org";
$mrbs_company = "Institute for Systems Biology (ISB)";   // This line must always be uncommented ($mrbs
$mrbs_company_logo = "logo-dark.webp";    // name of your logo file.   This example assumes it is in the MRBS directory
$mrbs_company_more_info = "Facilities Reservation System";
$mrbs_company_url = "https://sites.google.com/systemsbiology.org/intranet/ISB";
$url_base = "https://mrbs.systemsbiology.net";

/*********************************
 * Vocabulary
 *********************************/

$booking_types[] = "X";
$vocab_override["en"]["type.I"] = "ISB";
$vocab_override["en"]["type.E"] = "Tenant";
$vocab_override["en"]["type.X"] = "External";
$vocab_override["en"]["mrbs"] = "Facilities Reservation System";
$vocab_override['en']['mail_body_new_entry']     = "A new entry has been booked.\n\n" .
                                    "If this is for an event, please be sure to fill out the event form:\n" .
                                    "https://docs.google.com/forms/d/e/1FAIpQLScg_B7DEHsNF0QixxhMxsMaO-dOPHvVBjSCIaRjm64HJVB5hA/viewform\n" .
                                    "If this is for a GoToMeeting/Zoom/WebEx conference, please email " .
                                    "help@isbscience.org with your event details.\n\n" .
                                    "Details on your room booking are below:";
$vocab_override['en']['mail_body_changed_entry'] = "An entry has been modified.\n" .
                                    "If this is for an event, please be sure to fill out the event form:\n" .
                                    "https://docs.google.com/forms/d/e/1FAIpQLScg_B7DEHsNF0QixxhMxsMaO-dOPHvVBjSCIaRjm64HJVB5hA/viewform\n" .
                                    "If this is for a GoToMeeting/Zoom/WebEx conference, please email " .
                                    "help@isbscience.org with your event details.\n\n" .
                                    "Details on your room booking are below:";

?>
