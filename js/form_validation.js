/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var x, y, z, zi, a, webs, username, cemail, cpassword, cname, caddress, city, designation, email, password, state, country;
var fnme=0, lnme=0, cnme=0, ctnmbr=0, cadd=0, cty=0, zipc=0, tnum=0, dsg=0, wbs=0, usn=0, eml=0, ceml=0, pss=0, cpss=0;

$(document).ready(function(){
    
    document.getElementById("signup_button").disabled = true;
   
     $("#right_warning").hide();
    $(".second").hide();
    $(".2").hide();
    $(".firstname_wrong").hide();
    $(".firstname_right").hide();
    $(".lastname_wrong").hide();
    $(".lastname_right").hide();
    $(".ut_number_wrong").hide();
    $(".ut_number_right").hide();
    $(".zipcode_right").hide();
    $(".zipcode_wrong").hide();
    $(".tel_number_wrong").hide();
    $(".tel_number_right").hide();
    $(".website_right").hide();
    $(".website_wrong").hide();
    $(".username_right").hide();
    $(".username_wrong").hide();
    $(".email_right").hide();
    $(".email_wrong").hide();
    $(".conemail_right").hide();
    $(".conemail_wrong").hide();
    $(".fconemail_wrong").hide();
    $(".password_right").hide();
    $(".password_wrong").hide();
    $(".conpassword_right").hide();
    $(".conpassword_wrong").hide();
    $(".fconpassword_wrong").hide();
    $(".cname_wrong").hide();
    $(".cname_right").hide();
    $(".caddress_wrong").hide();
    $(".caddress_right").hide();
    $(".city_wrong").hide();
    $(".city_right").hide();
    $(".designation_wrong").hide();
    $(".designation_right").hide();
    
    var conemail_flag=0, conpassword_flag=0;
    
    $("#exampleInputFirstname").focusout(function(){
        x=document.forms["signup_form"]["firstname"].value;
        if (!isNaN(x))
        {
            $(".firstname_wrong").slideDown("slow");
            return false;
        }
        else
        {
            $(".firstname_right").slideDown("slow");
            fnme=1;
            return false;
        }
    });
    $("#exampleInputFirstname").focusin(function(){
        $(".firstname_wrong").hide();
        $(".firstname_right").hide();
    });
    
    $("#exampleInputLastname").focusout(function(){
        y=document.forms["signup_form"]["lastname"].value;
        if (!isNaN(y))
        {
            $(".lastname_wrong").slideDown("slow");
            return false;
        }
        else
        {
            $(".lastname_right").slideDown("slow");
            lnme=1;
            return false;
        }
    });
    $("#exampleInputLastname").focusin(function(){
        $(".lastname_wrong").hide();
        $(".lastname_right").hide();
    });
    
    $("#exampleInputUtrnumber").focusout(function(){
        z=document.forms["signup_form"]["ut_number"].value;
        if (isNaN(z) || !z.length)
        {
            $(".ut_number_wrong").slideDown("slow");
            return false;
        }
        else {
            $(".ut_number_right").slideDown("slow");
            ctnmbr=1;
            return false;
        }
    });
    $("#exampleInputUtrnumber").focusin(function(){
        $(".ut_number_wrong").hide();
        $(".ut_number_right").hide();
    });
    
    $("#exampleInputZipcode").focusout(function(){
        zi=document.forms["signup_form"]["zipcode"].value;
        if (isNaN(zi) || !zi.length)
        {
            $(".zipcode_wrong").slideDown("slow");
            return false;
        }
        else
        {
            $(".zipcode_right").slideDown("slow");
            zipc=1;
            return false;
        }
    });
    $("#exampleInputZipcode").focusin(function(){
        $(".zipcode_right").hide();
        $(".zipcode_wrong").hide();
    });
    
    $("#exampleInputTelnumber").focusout(function(){
        a=document.forms["signup_form"]["tel_number"].value;
        if (isNaN(a) || !a.length)
        {
            $(".tel_number_wrong").slideDown("slow");
            return false;
        }
        else
        {
            $(".tel_number_right").slideDown("slow");
            tnum=1;
            return false;
        }
    });
    $("#exampleInputTelnumber").focusin(function(){
        $(".tel_number_right").hide();
        $(".tel_number_wrong").hide();
    });
    
    $("#exampleInputWebsite").focusout(function(){
        webs = document.forms["signup_form"]["website"].value;
        if(webs.includes("www.") &&(webs.includes(".com") ||webs.includes(".in") ||webs.includes(".org") ||webs.includes(".net")))
        {
             $(".website_right").slideDown("slow");
             wbs=1;
             return false;
        }
        else{
            $(".website_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputWebsite").focusin(function(){
        $(".website_right").hide();
        $(".website_wrong").hide();
    });
    
    $("#exampleInputUsername").focusout(function(){
        username = document.forms["signup_form"]["username"].value;
        if(username.length >= 5 && username.length <= 8)
        {
             $(".username_right").slideDown("slow");
             usn=1;
             return false;
        }
        else
        {
            $(".username_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputUsername").focusin(function(){
        $(".username_right").hide();
        $(".username_wrong").hide();
    });
    
    $("#exampleInputEmail").focusout(function(){
        email = document.forms["signup_form"]["email"].value;
        if(email.includes("@") &&(email.includes(".com") ||email.includes(".in") ||email.includes(".org") ||email.includes(".net")))
        {
             $(".email_right").slideDown("slow");
             eml=1;
             conemail_flag=1;
             return false;
        }
        else
        {
            $(".email_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputEmail").focusin(function(){
        $(".email_right").hide();
        $(".email_wrong").hide();
    });
    
    $("#exampleInputConemail").focusout(function(){
        cemail = document.forms["signup_form"]["conemail"].value;
        if(conemail_flag == 1)
        {
            if(cemail == email){
             $(".conemail_right").slideDown("slow");
             ceml=1;
             return false;
            }
            else{
                $(".conemail_wrong").slideDown("slow");
                return false;
            }
        }
        else
        {
            $(".fconemail_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputConemail").focusin(function(){
        $(".conemail_right").hide();
        $(".conemail_wrong").hide();
        $(".fconemail_wrong").hide();
    });
    
    $("#exampleInputPassword").focusout(function(){
        password = document.forms["signup_form"]["password"].value;
        if(password.length < 8)
        {
             $(".password_wrong").slideDown("slow");
             return false;
        }
        else
        {
            $(".password_right").slideDown("slow");
            pss=1;
            conpassword_flag=1;
             return false;
        }
    });
    $("#exampleInputPassword").focusin(function(){
        $(".password_right").hide();
        $(".password_wrong").hide();
    });
    
    $("#exampleInputConpassword").focusout(function(){
        cpassword = document.forms["signup_form"]["conpassword"].value;
        if(conpassword_flag == 1)
        {
            if(cpassword == password){
             $(".conpassword_right").slideDown("slow");
             cpss=1;
             recheck();
             return false;
            }
            else{
                $(".conpassword_wrong").slideDown("slow");
                return false;
            }
        }
        else
        {
            $(".fconpassword_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputConpassword").focusin(function(){
        $(".conpassword_right").hide();
        $(".conpassword_wrong").hide();
        $(".fconpassword_wrong").hide();
    });
    
    $("#exampleInputCompanyname").focusout(function(){
        cname = document.forms["signup_form"]["c_name"].value;
        if(cname.length)
        {
             $(".cname_right").slideDown("slow");
             cnme=1;
             return false;
        }
        else
        {
            $(".cname_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputCompanyname").focusin(function(){
        $(".cname_right").hide();
        $(".cname_wrong").hide();
    });
    
    $("#exampleInputCompanyaddress").focusout(function(){
        caddress = document.forms["signup_form"]["c_address"].value;
        if(caddress.length)
        {
             $(".caddress_right").slideDown("slow");
             cadd=1;
             return false;
        }
        else
        {
            $(".caddress_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputCompanyaddress").focusin(function(){
        $(".caddress_right").hide();
        $(".caddress_wrong").hide();
    });
    
    $("#exampleInputCity").focusout(function(){
        city = document.forms["signup_form"]["city"].value;
        if(city.length)
        {
             $(".city_right").slideDown("slow");
             cty=1;
             return false;
        }
        else
        {
            $(".city_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputCity").focusin(function(){
        $(".city_right").hide();
        $(".city_wrong").hide();
    });
    
    $("#exampleInputDesignation").focusout(function(){
        designation = document.forms["signup_form"]["designation"].value;
        if(designation.length)
        {
             $(".designation_right").slideDown("slow");
             dsg=1;
             return false;
        }
        else
        {
            $(".designation_wrong").slideDown("slow");
             return false;
        }
    });
    $("#exampleInputDesignation").focusin(function(){
        $(".designation_right").hide();
        $(".designation_wrong").hide();
    });
    
    $("#exampleInputState").focusout(function(){
        state= document.forms["signup_form"]["state"].value;
    });
    
    $("#exampleInputCountry").focusout(function(){
        country = document.forms["signup_form"]["country"].value;
    });
    
    
});

function recheck() {
    var total=0;
    total = fnme+lnme+cnme+ctnmbr+cadd+cty+zipc+tnum+dsg+usn+eml+ceml+pss+cpss;
    if(total >= 13)
    {
        document.getElementById("signup_button").disabled = false;
        $("#right_warning").show();
        $("#wrong_warning").hide();
    }
    else{
       $("#wrong_warning").show();
    }
       
 }